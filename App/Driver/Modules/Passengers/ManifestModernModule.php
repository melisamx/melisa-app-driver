<?php namespace App\Driver\Modules\Passengers;

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
        'asset.driver.phone.passengers.dashboard',
    ];
    
    public $jsAdd = [
        'asset.driver.passengers.dashboard',
    ];
    
}
