<?php

use Illuminate\Database\Seeder;

use App\Core\Models\Profiles;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Profiles::firstOrCreate([
            'id'=>2,
            'name'=>'Drivers',
            'key'=>'driver',
            'icon'=>'fa fa-people',
        ]);
        
        Profiles::firstOrCreate([
            'id'=>3,
            'name'=>'Passengers',
            'key'=>'passenger',
            'icon'=>'fa fa-people',
        ]);
        
    }
}
