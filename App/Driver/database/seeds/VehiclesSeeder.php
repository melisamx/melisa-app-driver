<?php

use Illuminate\Database\Seeder;
use App\Driver\Models\Vehicles;
use Melisa\Laravel\Database\CreateIdentity;

class VehiclesSeeder extends Seeder
{
    
    use CreateIdentity;
    
    public function run()
    {
        
        $this->call(VehiclesClassSeeder::class);
        $this->call(VehiclesTypeSeeder::class);
        
        Vehicles::firstOrCreate([
            'id'=>$this->getId(),
            'idVehicleType'=>1,
            'idIdentityCreator'=>'SEDAN',
            'enrollment'=>'AA-123-12',
            'brand'=>'NISSAN',
            'model'=>'SENTRA',
        ]);
        
    }
    
}
