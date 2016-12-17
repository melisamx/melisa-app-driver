<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class ApplicationSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->installApplication('driver', [
            'name'=>'Driver',
            'description'=>'Application Driver',
            'nameSpace'=>'Melisa.driver',
            'typeSecurity'=>'arat'
        ]);
        
    }
    
}
