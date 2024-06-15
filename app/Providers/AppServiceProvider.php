<?php

namespace App\Providers;

use App\Macros\BuilderMacro;
use App\Models\Menu;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Schema;
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

		$this->loadViewsFrom(resource_path('website/views'), 'website');
		$this->loadViewsFrom(resource_path('admin/views'), 'admin');

        Schema::defaultStringLength(125);
	}
}
