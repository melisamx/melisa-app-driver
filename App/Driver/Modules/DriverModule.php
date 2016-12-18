<?php namespace App\Driver\Modules;

use App\Core\Modules\ApplicationSenchaModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriverModule extends ApplicationSenchaModule
{
    
    public function dataDictionary() {
        
        $config = [
            'urlManifest'=>'manifest/',
        ];
        
        return melisa('array')->mergeDefault($config, parent::dataDictionary());
        
    }
    
}
