<?php namespace App\Driver\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Driver\Modules\DriverModule;
use App\Driver\Modules\ManifestClassicModule;

class DriverController extends Controller
{
    
    public function index(DriverModule $module)
    {
        
        if( melisa('userAgent')->isMobile()) {
            
            return $this->mobile();
            
        }
        
        return $module->render();
        
    }
    
    public function mobile() {
        
        return 'Driver controller mombile';
        
    }
    
    public function manifestClassic(ManifestClassicModule $module) {
        
        return $module->render();
        
    }
    
    public function manifestModern() {
        
        return 'Driver controller modern classic';
        
    }
    
}
