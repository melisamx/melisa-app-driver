<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\CreateIdentity;
use Melisa\Laravel\Database\FirstOrCreate;

class DriversSeeder extends Seeder
{
    
    use CreateIdentity, FirstOrCreate;
    
    public function run()
    {
        
        $this->call(ProfilesSeeder::class);
        $this->call(DriversStatusSeeder::class);
        
        $this->createIdentity('driver');
        $id = $this->getId();
        
        $this->call(VehiclesSeeder::class);
        
        $this->firstOrCreate('App\Driver\Models\Drivers', [
            [
                'id'=>$id,
                'idVehicle'=>$id,
                'idPeople'=>$id,
            ]
        ]);
        
    }
    
}
