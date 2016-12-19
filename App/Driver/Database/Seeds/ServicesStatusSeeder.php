<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ServicesStatusSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->updateOrCreate('App\Driver\Models\ServicesStatus', [
            [
                'id'=>1,
                'name'=>'NUEVO',
            ], [
                'id'=>2,
                'name'=>'CHOFER EN CAMINO',
            ], [
                'id'=>3,
                'name'=>'EN VIAJE',
            ], [
                'id'=>4,
                'name'=>'CANCELADO',
            ]
        ]);
        
    }
    
}
