<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;
use Melisa\Laravel\Database\FirstOrCreate;

class VehiclesTypesSeeder extends Seeder
{
    
    use IdSeeder, FirstOrCreate;
    
    public function run()
    {
        
        $id = $this->getIdInt();
        
        $this->firstOrCreate('App\Driver\Models\VehiclesTypes', [
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
