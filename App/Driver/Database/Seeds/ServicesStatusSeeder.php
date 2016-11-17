<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class ServicesStatusSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->firstOrCreate('App\Driver\Models\ServicesStatus', [
            [
                'id'=>1,
                'name'=>'NUEVO',
            ], [
                'id'=>2,
                'name'=>'CHOFER EN CAMINO',
            ], [
                'id'=>3,
                'name'=>'EN VIAJE',
            ], [
                'id'=>4,
                'name'=>'CANCELADO',
            ]
        ]);
        
    }
    
}
