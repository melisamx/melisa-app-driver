<?php namespace App\Driver\Http\Controllers;

use Melisa\Laravel\Http\Controllers\Controller;

class DriverController extends Controller
{
    
    public function index()
    {
        
        if( melisa('userAgent')->isMobile()) {
            
            return $this->mobile();
            
        }
        
        return 'Driver controller web';
        
    }
    
    public function mobile() {
        
        return 'Driver controller mombile';
        
    }
    
}
