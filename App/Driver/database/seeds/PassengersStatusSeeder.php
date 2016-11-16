<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class PassengersStatusSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->firstOrCreate('App\Driver\Models\PassengersStatus', [
            [
                'id'=>1,
                'name'=>'FUERA DE LINEA',
            ],
            [
                'id'=>2,
                'name'=>'EN LINEA',
            ],
            [
                'id'=>3,
                'name'=>'BLOQUEADO',
            ],
            [
                'id'=>4,
                'name'=>'EN SERVICIO',
            ],
            [
                'id'=>5,
                'name'=>'ESPERANDO SERVICIO',
            ],
        ]);
        
    }
    
}
