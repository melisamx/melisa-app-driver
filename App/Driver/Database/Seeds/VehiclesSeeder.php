<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class VehiclesSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->call(VehiclesClassSeeder::class);
        $this->call(VehiclesTypesSeeder::class);
        
        $this->updateOrCreate('App\Driver\Models\Vehicles', [
            [
                'find'=>[
                    'id'=>$this->getId(),
                ],
                'values'=>[
                    'idVehicleType'=>1,
                    'idIdentityCreator'=>'SEDAN',
                    'enrollment'=>'AA-123-12',
                    'brand'=>'NISSAN',
                    'model'=>'SENTRA',
                ]
            ],
        ]);
        
    }
    
}
