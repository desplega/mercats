<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;

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
        // Filament navigation group order
        Filament::registerNavigationGroups([
            'General Management',
            'User Management',
        ]);

        // Customize user menu
        Filament::serving(function () {
            $tmp = auth()->user()?->id;
            Filament::registerUserMenuItems([
                'account' => UserMenuItem::make()
                    ->url(route('filament.resources.users.edit', auth()->user()?->id ?: 0)),
            ]);
        });
    }
}
