<?php namespace App\Driver\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Driver\Modules\Passengers\DashboardModule;
use App\Driver\Modules\Passengers\ManifestClassicModule;
use App\Driver\Modules\Passengers\ManifestModernModule;

class PassengersController extends Controller
{
    
    public function index(DashboardModule $module)
    {
        
        return $module->render();
        
    }
    
    public function manifestClassic(ManifestClassicModule $module) {
        
        return $module->render();
        
    }
    
    public function manifestModern(ManifestModernModule $module) {
        
        return $module->render();
        
    }
    
}
