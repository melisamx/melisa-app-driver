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
        'app.driver.dashboard.css',
    ];
    
    public $jsAdd = [
        'https://maps.googleapis.com/maps/api/js?libraries=geometry&key=AIzaSyAU7V5rGEn4X-ZjFUYqxwu28sAg3Fq6iis',
        'app.driver.main',
    ];
    
    public function config() {
        
        return [
            'urls'=>[
                'realtime'=>'https://demo.nerine.mx:8044/',
                'identitiesCoordinates'=>'/driver.php/identities/coordinates/',
            ],
            'identity'=>'asd'
        ];
        
    }
    
}
