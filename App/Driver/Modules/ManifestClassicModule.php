<?php namespace App\Driver\Modules;

use App\Core\Modules\ManifestSenchaModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ManifestClassicModule extends ManifestSenchaModule
{
    
    public $cssAdd = [
        'animatecss',
        'asset.driver.dashboard.css',
    ];
    
    public $jsAdd = [
        'asset.driver.main',        
    ];
    
    public function config() {
        
        $this->jsAdd []= config('googlemaps.api') . '&key=' . config('googlemaps.key');
        
        return [
            'urls'=>[
                'realtime'=>config('app.urlRealtime'),
                'identitiesCoordinates'=>'/driver.php/identities/coordinates/',
            ],
            'identity'=>'asd'
        ];
        
    }
    
}
