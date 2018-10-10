<?php

namespace App\Providers;

use App\User;
use App\Policies\subs;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        User::class => subs::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot() {
        $this->registerPolicies();

//        Gate::define('subs-only', 'App\Policies\subs@subs_only');
//        Gate::resource('subs', 'App\Policies\subs',[
//            'subs.premium' =>'premium'
//        ]);
    }

}
