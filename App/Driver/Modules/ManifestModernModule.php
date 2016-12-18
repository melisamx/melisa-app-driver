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
        'asset.driver.dashboard.css',
    ];
    
    public $jsAdd = [
        'asset.driver.main',
    ];
    
}
