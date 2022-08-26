<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::registerTheme(
            app(Vite::class)('resources/css/filament.css'),
        );

        // Filament navigation group order
        Filament::registerNavigationGroups([
            'General Management',
            'User Management',
        ]);
    }
}
