<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\CreateIdentity;
use App\Driver\Models\Drivers;

class DriversSeeder extends Seeder
{
    
    use CreateIdentity;
    
    public function run()
    {
        
        $this->call(ProfilesSeeder::class);
        $this->call(DriversStatusSeeder::class);
        
        $this->createIdentity('driver');
        $id = $this->getId();
        
        $this->call(VehiclesSeeder::class);
        
        Drivers::firstOrCreate([
            'id'=>$id,
            'idVehicle'=>$id,
            'idPeople'=>$id,
        ]);
        
    }
    
}
