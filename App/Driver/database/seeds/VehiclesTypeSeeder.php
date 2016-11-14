<?php

use Illuminate\Database\Seeder;

class VehiclesTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('VehiclesTypes')->insert([
            [
                'id'=>1,
                'idVehicleClass'=>1,
                'name'=>'SEDAN',
            ],
            [
                'id'=>2,
                'idVehicleClass'=>1,
                'name'=>'CAMIONETA',
            ],
        ]);
        
    }
}
