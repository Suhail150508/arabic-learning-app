<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $supported = ['en', 'bn', 'ar'];
        $locale = $request->query('lang');
        if ($locale && in_array($locale, $supported, true)) {
            session(['app_locale' => $locale]);
        }
        app()->setLocale(session('app_locale', config('app.locale')));
        return $next($request);
    }
}


