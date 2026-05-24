<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
      // یا
    Paginator::defaultView('pagination::tailwind');
    Paginator::defaultSimpleView('pagination::simple-tailwind');
        if (app()->environment('production') || config('app.env') === 'production') {
        URL::forceScheme('https');
    }
    }
}
