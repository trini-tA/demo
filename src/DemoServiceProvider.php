<?php namespace Trinita\Demo;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider {
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register(){
        $this->app->bind('demo', function ($app) {
            return new Demo();
        });
	}

    /**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot(){
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides(){
	}

}
//DemoServiceProvider