<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

	protected $policies = [ 'App\Book' => 'App\Policies\BookPolicy' ];
//	protected $policies = [ Book::class => BookPolicy::class, ];

	// register any application authentication / authorization services
	public function boot(GateContract $gate) {
		$this->registerPolicies($gate);
	}

}
