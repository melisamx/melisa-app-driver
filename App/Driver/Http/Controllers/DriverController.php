<?php namespace App\Driver\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Driver\Modules\DriverModule;
use App\Driver\Modules\ManifestClassicModule;
use App\Driver\Modules\ManifestModernModule;

class DriverController extends Controller
{
    
    public function index(DriverModule $module)
    {
        
        if( melisa('userAgent')->isMobile()) {
            
            return $this->mobile($module);
            
        }
        
        return $module->render();
        
    }
    
    public function mobile($module) {
        
        return $module->render();
        
    }
    
    public function manifestClassic(ManifestClassicModule $module) {
        
        return $module->render();
        
    }
    
    public function manifestModern(ManifestModernModule $module) {
        
        return $module->render();
        
    }
    
}
