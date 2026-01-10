<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->registerPolicies();

        Passport::routes(); // Register Passport routes
        Passport::loadKeysFrom(storage_path()); // Optional if you want custom keys location
        Gate::before(function ($user) {
            return $user->hasRole('admin') ? true : null;
        });

        Gate::define('users.manage', fn ($user) => $user->hasPermission('users.manage'));
        Gate::define('products.create', fn ($user) => $user->hasPermission('products.create'));
        Gate::define('products.update', fn ($user) => $user->hasPermission('products.update'));
        Gate::define('categories.create', fn ($user) => $user->hasPermission('categories.create'));
        Gate::define('categories.update', fn ($user) => $user->hasPermission('categories.update'));
    }
}
