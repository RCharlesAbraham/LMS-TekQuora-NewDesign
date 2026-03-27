<?php

namespace App\Http\Controllers\LmsUi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class LocaleController extends Controller
{
    public function setLocale(Request $request, string $locale)
    {
        $supported = config('lms_ui.supported', ['en', 'th']);
        $default = config('lms_ui.default', 'en');

        if (! in_array($locale, $supported, true)) {
            $locale = $default;
        }

        session(['locale' => $locale]);

        if (Auth::check() && Schema::hasColumn('users', 'language_preference')) {
            try {
                Auth::user()->update(['language_preference' => $locale]);
            } catch (\Throwable) {
                //
            }
        }

        return back();
    }
}
