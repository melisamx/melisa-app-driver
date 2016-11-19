<?php namespace App\Driver\Modules;

use App\Driver\Modules\ManifestClassicModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ManifestModernModule extends ManifestClassicModule
{
    
    public $type = 'modern';
    
    public $cssAdd = [
        'animatecss',
        'waves.sencha',
        'app.driver.dashboard.css',
    ];
    
    public $jsAdd = [
        'jquery',
        'waves',
        'https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyAU7V5rGEn4X-ZjFUYqxwu28sAg3Fq6iis',
        'app.driver.main',
    ];
    
}
