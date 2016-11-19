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
    ];
    
    public $jsAdd = [
        'app.driver.main',
    ];
    
    public function config() {
        
        return [
            'urls'=>[
                'realtime'=>'https://demo.nerine.mx:8044/',
                'driversFree'=>'/driver.php/drivers/free/',
                'tracking'=>'/driver.php/drivers/tracking/',
                'offline'=>'/driver.php/drivers/offline/',
                'online'=>'/driver.php/drivers/online/',
            ],
            'driver'=>'asd'
        ];
        
    }
    
}
