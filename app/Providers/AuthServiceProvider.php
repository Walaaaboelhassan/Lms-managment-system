<?php

namespace App\Providers;

use App\Models\Maanuser;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User ;

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

        Gate::define('isSuperAdmin', function (User $user) {

                return $user->roles()->first()->slug == 'super-admin' ;

        });
        Gate::define('isAdmin', function (User $user) {

                return $user->roles->first()->slug == 'admin' ;
        });
        Gate::define('isInstructor', function (User $user) {

                return $user->roles->first()->slug == 'instructor' ;
        });

    }
}
