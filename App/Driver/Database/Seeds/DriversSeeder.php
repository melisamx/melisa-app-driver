<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class DriversSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->call(ProfilesSeeder::class);
        $this->call(DriversStatusSeeder::class);
        
        $this->installIdentity('driver', 'developer', [
            'display'=>'Developer driver',
            'displayEspecific'=>'Developer driver',
            'active'=>true,
            'isDefault'=>false,
        ]);
        
        $id = $this->getId();
        
        $this->call(VehiclesSeeder::class);
        
        $this->updateOrCreate('App\Driver\Models\Drivers', [
            [
                'id'=>$id,
                'idVehicle'=>$id,
                'idPeople'=>$id,
            ]
        ]);
        
    }
    
}
