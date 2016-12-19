<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
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
