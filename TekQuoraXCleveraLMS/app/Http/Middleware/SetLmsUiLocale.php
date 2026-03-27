<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLmsUiLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supported = config('lms_ui.supported', ['en', 'th']);
        $default = config('lms_ui.default', 'en');
        $locale = session('locale', $default);

        if (! in_array($locale, $supported, true)) {
            $locale = $default;
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
