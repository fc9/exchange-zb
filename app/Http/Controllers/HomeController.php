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
            'initial' => $this->initial
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
            'initial' => $this->initial
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
        }

        $this->usd = $currentBtc->USD->sell;
        $this->tickers = $tickers;
    }

    private function getBTCQuotes()
    {
        $this->quotes = [
//            ['year' => 2011, 'start' => 86818.00, 'end' => 86263.18],
//            ['year' => 2012, 'start' => 5207.62, 'end' => 5241.11],
            ['year' => 2013, 'start' => 1622.19, 'end' => 1629.18],
            ['year' => 2014, 'start' => 24.07, 'end' => 24.15],
            ['year' => 2015, 'start' => 52.25, 'end' => 54.73],
            ['year' => 2016, 'start' => 24.84, 'end' => 24.91],
            ['year' => 2017, 'start' => 13.58, 'end' => 13.67]
        ];
        $this->initial = $this->quotes[0];
    }
}
