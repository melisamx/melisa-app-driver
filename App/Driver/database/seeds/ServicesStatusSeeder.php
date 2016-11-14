<?php

use Illuminate\Database\Seeder;

class ServicesStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('ServicesStatus')->insert([
            [
                'id'=>1,
                'name'=>'NUEVO',
            ],
            [
                'id'=>2,
                'name'=>'CHOFER EN CAMINO',
            ],
            [
                'id'=>3,
                'name'=>'EN VIAJE',
            ],
            [
                'id'=>4,
                'name'=>'CANCELADO',
            ],
        ]);
        
    }
}
