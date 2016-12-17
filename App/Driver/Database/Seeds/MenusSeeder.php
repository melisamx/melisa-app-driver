<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class MenusSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installMenu('menu.driver.main', [
            'name'=>'Menu main in Application Driver',
        ]);
        
        $this->installMenu('menu.driver.passengers.main', [
            'name'=>'Menu main for passengers in Application Driver',
        ]);
        
        $this->installMenu('menu.driver.drivers.main', [
            'name'=>'Menu main for drivers in Application Driver',  
        ]);
        
    }
    
}
