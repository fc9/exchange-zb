<?php

namespace App;

use App;

class Lang extends \Illuminate\Support\Facades\Lang
{
    /**
     * @param \Illuminate\Http\Request $request
     */
    public static function index($request)
    {
        self::set(session()->has('locale') ? session()->get('locale') : self::getLocale($request));
    }

    /**
     * @param $locale
     */
    public static function update($locale)
    {
        if (self::isSupported($locale)) {
            self::set($locale);
        }
    }

    /**
     * Retorna as linguas suportadas pelo App.
     *
     * @return 2|array
     */
    public static function getSupportedLanguages()
    {
        return array_slice(scandir(app()->langPath()), 2);
    }

    /**
     * @param $locale
     */
    private static function set($locale)
    {
        session()->put('locale', $locale);
        app()->setLocale($locale);
    }

    /**
     * Verifica se há arquivos de tradução disponíveis para a língua.
     *
     * @param $locale
     * @return boolean
     */
    private static function isSupported($locale)
    {
        return in_array($locale, self::getSupportedLanguages());
    }

    /**
     * Obtem uma língua suportada pelo App que melhor atende ao cliente.
     *
     * Este método é usado pelo App quando não há como determinar o idioma por
     * meio de uma decisão explícita do usuário (que define uma variável de
     * sessão, ou uma URL específica, ou de outra maneira). É recomendável que
     * o app NUNCA substitua uma decisão explícita.
     *
     * Retornará uma língua do HTTP "Accept-Language". Esse cabelhaço anuncia
     * quais línguas o cliente é capaz de entender e qual variante de localidade
     * é preferida. Os navegadores definem valores adequados para esse cabeçalho
     * de acordo com o idioma da interface do usuário e, mesmo que um usuário
     * possa alterá-lo, isso acontece raramente (e é desaprovado).
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    private static function getLocale($request)
    {
        $accept_language = explode(',', $request->server('HTTP_ACCEPT_LANGUAGE'));

        foreach ($accept_language as $locale) {
            $locale = explode(';', $locale);
            if (self::isSupported($locale[0])) {
                return $locale[0];
            } else {
                //TODO: Armazenar as linguagens aceitas mas que não são atendidas.
            }
        }

        return config('app.locale');
    }
}
