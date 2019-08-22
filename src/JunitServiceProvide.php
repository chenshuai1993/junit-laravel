<?php
/**
 * Created by PhpStorm.
 * User: chenshuai
 * Date: 2019-08-21
 * Time: 19:03
 */

namespace Chenshuai1993\JunitLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Chenshuai1993\JunitLaravel\Http\Controllers\JunitController;

class JunitServiceProvide extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../resources/views', 'junit'
        );

    }

    public function register()
    {
        $this->app->singleton(JunitController::class, function(){
            return new JunitController();
        });

        $this->app->alias(JunitController::class, 'Junit');
    }

    public function provides()
    {
        return [JunitController::class, 'Junit'];
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Chenshuai1993\JunitLaravel\Http\Controllers',
            'prefix' => 'junit',
            'middleware'=>'web'
        ];
    }

    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }

}
