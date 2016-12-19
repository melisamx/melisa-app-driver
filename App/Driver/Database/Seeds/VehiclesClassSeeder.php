<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class VehiclesClassSeeder extends InstallSeeder
{
    
    public function run()
    {
                
        $this->updateOrCreate('App\Driver\Models\VehiclesClass', [
            [
                'id'=>1,
                'name'=>'AUTOMOVIL',
            ], [
                'id'=>2,
                'name'=>'PICK UP',
            ], [
                'id'=>3,
                'name'=>'MOTOCICLETAS',
            ]
        ]);
        
    }
    
}
