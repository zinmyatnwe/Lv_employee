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

        Gate::define('isAdmin',function($user){
            return $user->role == 'Admin';
        });

        // manager role
        Gate::define('isManager',function($user){
            return $user->role = 'Manager';
        });

        // branch manager role
        Gate::define('isBranchManager',function($user){
            return $user->role = 'BranchManager';
        });

        Gate::define('isEmployee',function($user){
            return $user->role = 'Employee';
        });

        
    }
}
