<?php

use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('profiles')->insert([
//            [
//                'id'=>2,
//                'name'=>'Drivers',
//                'key'=>'driver',
//                'icon'=>'fa fa-people',
//            ],
            [
                'id'=>3,
                'name'=>'Passengers',
                'key'=>'passenger',
                'icon'=>'fa fa-people',
            ],
        ]);
        
    }
}
