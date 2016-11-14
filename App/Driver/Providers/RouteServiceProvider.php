<?php namespace App\Driver\Providers;

use Melisa\Laravel\Providers\RouteServiceProvider as RouteService;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends RouteService
{
    
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    public $namespace = 'App\Driver\Http\Controllers';
    
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    public function mapApiRoutes()
    {
        
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace . '\Api',
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
        
    }
        
}
