<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class DriversDocumentsStatusSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->FirstOrCreate('App\Driver\Models\DriversDocumentsStatus', [
            [
                'id'=>1,
                'name'=>'NUEVO',
            ],
            [
                'id'=>2,
                'name'=>'APROBADO',
            ],
            [
                'id'=>3,
                'name'=>'CANCELADO',
            ],
        ]);
        
    }
    
}
