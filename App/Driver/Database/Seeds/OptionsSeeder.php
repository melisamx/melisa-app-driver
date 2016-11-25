<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\UpdateOrCreate;

class OptionsSeeder extends Seeder
{
    use UpdateOrCreate;
    
    public function run()
    {
        
        $this->updateOrCreate('App\Core\Models\Options', [
            [
                'find'=>[
                    'key'=>'option.driver.access'
                ],
                'values'=>[
                    'name'=>'Option main module in application driver',
                    'text'=>'Driver',
                    'isSubMenu'=>true
                ]
            ],
            [
                'find'=>[
                    'key'=>'option.driver.passengers.profile.view.access'
                ],
                'values'=>[
                    'name'=>'Option profile module in application driver',
                    'text'=>'Perfil'
                ]
            ],
            [
                'find'=>[
                    'key'=>'option.driver.passengers.services.view.access'
                ],
                'values'=>[
                    'name'=>'Option travels module in application driver',
                    'text'=>'Viajes'
                ]
            ],
            [
                'find'=>[
                    'key'=>'option.driver.passengers.places.view.access'
                ],
                'values'=>[
                    'name'=>'Option places module in application driver',
                    'text'=>'Mis lugares'
                ]
            ],
            [
                'find'=>[
                    'key'=>'option.driver.drivers.profile.view.access'
                ],
                'values'=>[
                    'name'=>'Option profile for drivers module in application driver',
                    'text'=>'Mis lugares'
                ]
            ],
            [
                'find'=>[
                    'key'=>'option.driver.drivers.services.history.view.access'
                ],
                'values'=>[
                    'name'=>'Option services for drivers module in application driver',
                    'text'=>'Historial de Servicios'
                ]
            ],
        ]);
        
    }
    
}
