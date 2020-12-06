<?php

namespace App\Providers;

use App\Models\User;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Global authorization for Super Admin, move to ::after once
        // limitations and other authorization is taking place.
        Gate::before(static function (User $user, $ability): ?bool {
            // must return null instead of false. 
            // Interferes with normal gate operation otherwise
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}
