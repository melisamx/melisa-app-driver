<?php

use Illuminate\Database\Seeder;

class RatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('Rates')->insert([
            [
                'id'=>"173f832d-9a18-11e6-b65e-080027f62005",
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'BASICA',
                'isDefault'=>true,
            ],
        ]);
        
    }
}
