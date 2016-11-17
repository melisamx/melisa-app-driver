<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;
use Melisa\Laravel\Database\FirstOrCreate;

class VehiclesSeeder extends Seeder
{
    use IdSeeder, FirstOrCreate;
    
    public function run()
    {
        
        $this->call(VehiclesClassSeeder::class);
        $this->call(VehiclesTypesSeeder::class);
        
        $this->firstOrCreate('App\Driver\Models\Vehicles', [
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
