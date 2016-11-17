<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class ProfilesSeeder extends Seeder
{
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->firstOrCreate('App\Core\Models\Profiles', [
            [
                'find'=>[
                    'key'=>'driver',
                ],
                'values'=>[
                    'name'=>'Drivers',
                    'icon'=>'fa fa-people',
                ]
            ],
            [
                'find'=>[
                    'key'=>'passenger',
                ],
                'values'=>[
                    'name'=>'Passengers',                    
                    'icon'=>'fa fa-people',
                ],
            ]
        ]);
        
    }
}
