<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class VehiclesClassSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
                
        $this->firstOrCreate('App\Driver\Models\VehiclesClass', [
            [
                'id'=>1,
                'name'=>'AUTOMOVIL',
            ], [
                'id'=>2,
                'name'=>'PICK UP',
            ], [
                'id'=>3,
                'name'=>'MOTOCICLETASP',
            ]
        ]);
        
    }
    
}
