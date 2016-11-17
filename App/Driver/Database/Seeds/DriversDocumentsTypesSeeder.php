<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class DriversDocumentsTypesSeeder extends Seeder
{    
    use FirstOrCreate;
    
    public function run() {
        
        $this->FirstOrCreate('App\Driver\Models\DriversDocumentsTypes', [
            [
                'id'=>1,
                'name'=>'LICENCIA PARA CONDUCIR VIGENTE',
            ],
            [
                'id'=>2,
                'name'=>'IDENTIFICACIÓN OFICIAL',
            ],
            [
                'id'=>3,
                'name'=>'CARTA DE NO ANTECEDENTES PENALES',
            ],
            [
                'id'=>4,
                'name'=>'TARJE DE CIRCULACIÓN',
            ],
            [
                'id'=>5,
                'name'=>'SEGURO DE COBERTURA AMPLIA',
            ],
            [
                'id'=>6,
                'name'=>'FOTO PERSONAL',
            ],
        ]);
        
    }
    
}
