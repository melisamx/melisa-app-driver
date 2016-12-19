<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
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
