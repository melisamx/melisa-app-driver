<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class ProfilesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installProfile('driver', [
            'name'=>'Drivers',
            'icon'=>'fa fa-people',
        ]);        
        
        $this->installProfile('passenger', [
            'name'=>'Passengers',                    
            'icon'=>'fa fa-people',
        ]);
        
    }
    
}
