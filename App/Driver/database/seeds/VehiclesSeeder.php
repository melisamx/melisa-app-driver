<?php

use Illuminate\Database\Seeder;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('Vehicles')->insert([
            [
                'id'=>"62a7ffbf-db3f-5867-bc37-6b559ce03141",
                'idVehicleType'=>1,
                'idIdentityCreator'=>'SEDAN',
                'enrollment'=>'AA-123-12',
                'brand'=>'NISSAN',
                'model'=>'SENTRA',
            ],
        ]);
        
    }
}
