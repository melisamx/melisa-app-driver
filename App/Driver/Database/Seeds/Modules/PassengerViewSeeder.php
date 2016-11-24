<?php namespace App\Driver\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class PassengerViewSeeder extends Seeder
{
    
    public function run()
    {
        
        app('App\Core\Logics\Modules\Install')->init([
            [
                'name'=>'View profile for passengers',
                'url'=>'app.driver.passengers.profile.view.access',
                'description'=>'Module UI for view profile for passengers',
                'nameSpace'=>'Melisa.driver.passengers.profile.View',
                'task'=>[
                    'name'=>'Access module view profile for passengers',
                    'description'=>'Permit access view profile for passengers',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'name'=>'Option profile module in application driver',
                    'text'=>'Perfil'
                ],
                'menu'=>[
                    [
                        'name'=>'Menu crud operations in profile',
                        'options'=>[
                            'app.driver.passengers.profile.edit.access'
                        ]
                    ]
                ]
            ]
        ]);
        
    }
    
}
