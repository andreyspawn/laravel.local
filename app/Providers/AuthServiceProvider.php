<?php

namespace App\Providers;

use App\Role;
use App\User;
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

        Gate::define('allow', function (User $user, $acl_resource) {

            $role_id = $user->roles()->first()->id;
            $acl_list = Role::all()->find($role_id)->acl->pluck('acl_name','id');
            //dd($acl_list);
            if (array_search($acl_resource,$acl_list->toArray()))
            {
                return $acl_resource;
            };
            return false;
        });
    }
}
