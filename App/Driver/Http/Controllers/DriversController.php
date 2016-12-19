<?php namespace App\Driver\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Driver\Modules\Drivers\DashboardModule;
use App\Driver\Modules\Drivers\ManifestClassicModule;
use App\Driver\Modules\Drivers\ManifestModernModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriversController extends Controller
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
