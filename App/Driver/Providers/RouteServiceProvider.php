<?php namespace App\Driver\Providers;

use Melisa\Laravel\Providers\RouteServiceProvider as RouteService;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends RouteService
{
    
    public $namespace = 'App\Driver\Http\Controllers';
    
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
