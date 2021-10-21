<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('can-edit-phone', function ($user, $phoneId) {
            return $user->id == $phoneId;
        });

        Gate::define('can-view-phone', function ($user, $phoneId) {
            return $user->id === $phoneId;
        });


        Gate::define('can-destroy-phone', function ($user, $phoneId) {
            return $user->id === $phoneId;
        });

        Gate::define('can-update-phone', function ($user, $phoneId) {
            return $user->id === $phoneId;
        });
    }
}
