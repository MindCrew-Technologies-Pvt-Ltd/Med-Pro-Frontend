<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Session()->has('applocale')) {
            if (array_key_exists(Session()->has('applocale'), config('languages'))){
                \App::setLocale(Session()->applocale);
           } else {
               \App::setLocale(config('app.fallback_locale'));
           }
        } else {
            \App::setLocale(config('app.fallback_locale'));
        }

        return $next($request);
    }
}
