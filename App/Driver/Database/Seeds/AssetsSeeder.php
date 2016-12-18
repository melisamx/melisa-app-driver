<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class AssetsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installAssetJs('asset.driver.driver.dashboard', [
            'name'=>'Application Driver for driver dashboard',
            'path'=>'/driver/js/ApplicationDriver.js',
        ]);
        
        $this->installAssetJs('asset.driver.passengers.dashboard', [
            'name'=>'Application Driver for passengers dashboard',
            'path'=>'/driver/js/ApplicationPassenger.js',
        ]);
        
        $this->installAssetCss('asset.driver.phone.driver.dashboard', [
            'name'=>'Driver CSS Dashboard for driver',
            'path'=>'/driver/css/driver-phone.css',
        ]);
        
        $this->installAssetCss('asset.driver.phone.passengers.dashboard', [
            'name'=>'Driver CSS Dashboard for passengers',
            'path'=>'/driver/css/passenger-phone.css',
        ]);
        
    }
    
}
