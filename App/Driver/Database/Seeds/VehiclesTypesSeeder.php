<?php namespace App\Driver\Database\Seeds;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class VehiclesTypesSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $vehicleClass = $this->findVehicleClass('AUTOMOVIL');
        
        $this->updateOrCreate('App\Driver\Models\VehiclesTypes', [
            [
                'id'=>1,
                'idVehicleClass'=>$vehicleClass->id,
                'name'=>'SEDAN',
            ], [
                'id'=>2,
                'idVehicleClass'=>$vehicleClass->id,
                'name'=>'CAMIONETA',
            ]
        ]);
        
    }
    
}
