<?php namespace App\Driver\Modules\Drivers;

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
        'asset.driver.phone.driver.dashboard',
    ];
    
    public $jsAdd = [
        'asset.driver.driver.dashboard',
    ];
    
}
