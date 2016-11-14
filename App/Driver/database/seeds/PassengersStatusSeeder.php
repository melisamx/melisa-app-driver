<?php

use Illuminate\Database\Seeder;

class PassengersStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('PassengersStatus')->insert([
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
