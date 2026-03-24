<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LmsUiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadTranslationsFrom(resource_path('lang/lms_ui'), 'lms_ui');
    }
}
