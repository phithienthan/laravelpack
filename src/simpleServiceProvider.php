<?php

namespace Sample\Simple;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class SimpleServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        $this->setupPackage();        
        $this->setupRoutes($this->app->router);       
    }

    /**
     * Setup the package.
     *
     * @return void
     */
    protected function setupPackage() {
        $this->loadViewsFrom(realpath(__DIR__ . '/views'), 'sample');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        //
    }

    /**
     * Setup the routes.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function setupRoutes(Router $router) {

        $router->group(['namespace' => 'Sample\Simple\Http\Controllers'], function (Router $router) {
            require __DIR__ . '/http/routes.php';
        });
    }

}
