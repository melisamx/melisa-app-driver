<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class RedirectsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $name = 'Redirect Drivers to Application Driver';
        
        $this->installRedirect('driver', $name, [
            'description'=>'Redirect all identities Drivers to Application Driver',
            'path'=>'driver'
        ]);
        
        $this->installRedirectProfile($name, 'driver');
        
    }
    
}
