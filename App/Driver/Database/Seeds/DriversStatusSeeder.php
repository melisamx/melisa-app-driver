<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class DriversStatusSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->updateOrCreate('App\Driver\Models\DriversStatus', [
            [
                'id'=>1,
                'name'=>'FUERA DE LINEA',
            ], [
                'id'=>2,
                'name'=>'EN LINEA',
            ], [
                'id'=>3,
                'name'=>'BLOQUEADO',
            ], [
                'id'=>4,
                'name'=>'EN SERVICIO',
            ]
        ]);
        
    }
    
}
