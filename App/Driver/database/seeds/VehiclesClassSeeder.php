<?php

use Illuminate\Database\Seeder;

class VehiclesClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('VehiclesClass')->insert([
            [
                'id'=>1,
                'name'=>'AUTOMOVIL',
            ],
            [
                'id'=>2,
                'name'=>'PICK UP',
            ],
            [
                'id'=>3,
                'name'=>'MOTOCICLETASP',
            ],
        ]);
        
    }
}
