<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class AssetsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installAssetJs('asset.driver.main', [
            'name'=>'Application Sencha Main',
            'path'=>'/driver/js/Application.js',
        ]);
        
        $this->installAssetCss('asset.driver.dashboard.css', [
            'name'=>'Driver CSS Dashboard',
            'path'=>'/driver/css/dashboard.css',
        ]);
        
    }
    
}
