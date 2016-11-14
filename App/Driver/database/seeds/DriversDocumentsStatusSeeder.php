<?php

use Illuminate\Database\Seeder;

class DriversDocumentsStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('DriversDocumentsStatus')->insert([
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
