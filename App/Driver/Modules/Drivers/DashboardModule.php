<?php namespace App\Driver\Modules\Drivers;

use App\Core\Modules\ApplicationSenchaModule;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DashboardModule extends ApplicationSenchaModule
{
    
    public function dataDictionary() {
        
        $config = [
            'urlManifest'=>'manifest/',
        ];
        
        return melisa('array')->mergeDefault($config, parent::dataDictionary());
        
    }
    
}
