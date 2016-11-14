<?php

use Illuminate\Database\Seeder;

class DriversDocumentsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('DriversDocumentsType')->insert([
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
