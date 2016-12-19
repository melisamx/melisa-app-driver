<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriversDocumentsTypesSeeder extends InstallSeeder
{
    
    public function run() {
        
        $this->updateOrCreate('App\Driver\Models\DriversDocumentsTypes', [
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
