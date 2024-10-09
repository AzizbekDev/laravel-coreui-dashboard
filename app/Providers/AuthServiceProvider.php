<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();
        $permissions = Permission::pluck('name');
        
        foreach ($permissions as $permission) {
            Gate::define($permission, function ($user) use ($permission) {
                return $user->hasPermission($permission);
            });
        }
    }
}
