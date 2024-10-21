<?php

namespace App\Providers;

use Laravel\Folio\Folio;
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

        Folio::path(resource_path('views/pages/admin'))
            ->uri('/admin')
            ->middleware([
                '*' => [
                    'auth',
                    'verified'
                ],
            ]);
    }
}
