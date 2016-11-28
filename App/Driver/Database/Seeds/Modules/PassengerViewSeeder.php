<?php namespace App\Driver\Database\Seeds\Modules;

use Illuminate\Database\Seeder;

class PassengerViewSeeder extends Seeder
{
    
    public function run()
    {
        
        app('App\Core\Logics\Modules\Install')->init([
            [
                'name'=>'View profile for passengers',
                'url'=>'/driver.php/modules/passengers/profile/view',
                'description'=>'Module UI for view profile for passengers',
                'nameSpace'=>'Melisa.driver.view.desktop.passengers.profile.ViewWrapper',
                'task'=>[
                    'key'=>'task.driver.passengers.profile.view.access',
                    'name'=>'Access module view profile for passengers',
                    'description'=>'Permit access view profile for passengers',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.driver.passengers.profile.view.access',
                    'name'=>'Option profile module in application driver',
                    'text'=>'Perfil'
                ],
                'menu'=>[
                    [
                        'key'=>'menu.driver.passengers.profile.view.access',
                        'name'=>'Menu crud operations in profile',
                        'options'=>[
                            'option.driver.passengers.profile.edit.access'
                        ]
                    ]
                ]
            ],
            [
                'name'=>'View profile for passengers version phone',
                'url'=>'/driver.php/modules/passengers/profile/viewPhone',
                'description'=>'Module UI version phone for view profile for passengers',
                'nameSpace'=>'Melisa.driver.view.phone.passengers.profile.ViewWrapper',
                'task'=>[
                    'key'=>'task.driver.phone.passengers.profile.view.access',
                    'name'=>'Access module view profile for passengers',
                    'description'=>'Permit access view profile for passengers',
                    'pattern'=>'access'
                ],
                'option'=>[
                    'key'=>'option.driver.phone.passengers.profile.view.access',
                    'name'=>'Option profile module in application driver version phone',
                    'text'=>'Perfil'
                ],
                'menu'=>[
                    [
                        'key'=>'menu.driver.phone.passengers.profile.view.access',
                        'name'=>'Menu crud operations in profile version phone',
                        'options'=>[
                            'option.driver.phone.passengers.profile.edit.access'
                        ]
                    ]
                ]
            ],
        ]);
        
    }
    
}
