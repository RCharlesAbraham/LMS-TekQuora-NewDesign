<?php

namespace App\Providers;

use App\Services\Legacy\LegacyBridgeInterface;
use App\Services\Legacy\LegacyHttpBridgeService;
use App\Services\Legacy\LegacyIncludeBridgeService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(LegacyBridgeInterface::class, function () {
            return config('legacy.bridge_driver') === 'include'
                ? new LegacyIncludeBridgeService()
                : new LegacyHttpBridgeService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->environment('production')) {
            $rootUrl = config('app.url');

            if (! empty($rootUrl)) {
                URL::forceRootUrl($rootUrl);
            }

            URL::forceScheme('https');
        }
    }
}
