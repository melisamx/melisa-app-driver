<?php namespace App\Driver\Database\Seeds;

class VehiclesSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->call(VehiclesClassSeeder::class);
        $this->call(VehiclesTypesSeeder::class);
        
        $this->installVehicle('AAA-111-222', 'SEDAN', [
            'brand'=>'NISSAN',
            'model'=>'SENTRA',
        ]);
        
    }
    
}
