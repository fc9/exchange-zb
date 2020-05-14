<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    protected $usd = 0;

    protected $tickers = [];

    protected $quotes = [];

    protected $initial = 0;

    protected $btcToday = 0;

    public function __construct()
    {
        $this->getTickers();
        $this->getBTCQuotes();
    }

    public function home()
    {
        //return view('home');
        return view('home', [
            'tickers' => $this->tickers,
            'usd' => $this->usd,
            'quotes' => $this->quotes,
            'initial' => $this->initial,
            'btcToday' => $this->btcToday
        ]);
    }

    public function how()
    {
        //return view('home');
        return view('how-it-works');
    }

    public function contact(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $body = $request->get('message');
        $data = ['name' => $name, 'email' => $email, 'subject' => $subject, 'body' => $body,];
        $from_mail = env('MAIL_FROM_ADDRESS');
        $from_name = env('MAIL_FROM_NAME');
        //dd($data);

        Mail::send(
            'emails.contact',
            $data,
            function ($message) use ($name, $email, $subject, $from_mail, $from_name) {
                $subject = 'Site - ' . $subject;
                $message->from($from_mail, $name . '(via contact form)')
                    ->to($from_mail, $from_name)
                    ->subject($subject);
            }
        );

        //return view('home');
        return view('home', [
            'tickers' => $this->tickers,
            'usd' => $this->usd,
            'quotes' => $this->quotes,
            'initial' => $this->initial,
            'btcToday' => $this->btcToday
        ]);
    }

    private function getTickers()
    {
        $this->client = new Client();

        $btc = $this->client->request('GET', 'https://blockchain.info/ticker');
        $currentBtc = json_decode($btc->getBody()->getContents());

        $currencies = [
            ['name' => 'Bitcoin', 'symbol' => 'btc'],
            ['name' => 'XRP', 'symbol' => 'xrp'],
            ['name' => 'Litecoin', 'symbol' => 'ltc'],
            ['name' => 'Ethereum', 'symbol' => 'eth'],
            ['name' => 'Bitcoin Cash', 'symbol' => 'bch'],
        ];

        foreach ($currencies as $currency) {
            $data = $this->client->request('GET',
                'https://www.bitstamp.net/api/v2/ticker_hour/' . $currency['symbol'] . 'usd/');
            $ticker = (array)json_decode($data->getBody()->getContents());
            $ticker['symbol'] = $currency['symbol'];
            $ticker['name'] = $currency['name'];
            $ticker['daily_change'] = number_format(($ticker['vwap'] - $ticker['bid']) * 100 / $ticker['bid'], 2);
            $ticker['date'] = date("M,d,Y h:i:s A", $ticker['timestamp']);
            $ticker['color'] = $ticker['daily_change'] > 0 ? 'green' : 'red';
            $tickers[] = $ticker;

            if ($currency['symbol'] === 'btc') {
                $this->btcToday = $ticker['bid'];
            }
        }

        $this->usd = $currentBtc->USD->sell;
        $this->tickers = $tickers;
    }

    private function getBTCQuotes()
    {
        $this->quotes = [
            ['year' => 2010, 'price' => 0.125],
//            ['year' => 2011, 'price' => 31],
            ['year' => 2012, 'price' => 130],
//            ['year' => 2013, 'price' => (266 + 130 + 100 + 796 + 800) / 5],
            ['year' => 2014, 'price' => (875 + 650 + 575 + 435 + 535) / 5],
//            ['year' => 2015, 'price' => (600 + 615 + 690) / 3],
            ['year' => 2016, 'price' => (600 + 690 + 690) / 3],
//            ['year' => 2017, 'price' => (7850 + 17900 + 19783 + 13800) / 4],
            ['year' => 2018, 'price' => (6200 + 6300 + 3300) / 3],
//            ['year' => 2019, 'price' => (3242 + 8721 + 12500 + 9300 + 10300) / 5],
        ];
        $this->initial = $this->quotes[0];
    }
}
