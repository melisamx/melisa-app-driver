<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class VehiclesTypesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $id = $this->getIdInt();
        
        $this->updateOrCreate('App\Driver\Models\VehiclesTypes', [
            [
                'id'=>1,
                'idVehicleClass'=>$id,
                'name'=>'SEDAN',
            ], [
                'id'=>2,
                'idVehicleClass'=>$id,
                'name'=>'CAMIONETA',
            ]
        ]);
        
    }
    
}
