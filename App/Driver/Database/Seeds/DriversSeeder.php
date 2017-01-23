<?php namespace App\Driver\Database\Seeds;

use App\Driver\Models\Drivers;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriversSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->call(ProfilesSeeder::class);
        $this->call(DriversStatusSeeder::class);
        
        $this->installIdentity('Developer driver', 'driver', 'developer', [
            'display'=>'Developer driver',
            'displayEspecific'=>'Developer driver',
            'active'=>true,
            'isDefault'=>false,
        ]);
        
        $id = $this->getId();
        
        $this->call(VehiclesSeeder::class);
        
        Drivers::updateOrCreate([
            'id'=>$id,
        ], [
            'idVehicle'=>$this->findVehicle('AAA-111-222')->id,
            'idPeople'=>$id,
        ]);
        
    }
    
}
