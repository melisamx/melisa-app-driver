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
                    'key'=>'app.driver.access'
                ],
                'values'=>[
                    'name'=>'Option main module in application driver',
                    'text'=>'Driver'
                ]
            ],
            [
                'find'=>[
                    'key'=>'app.driver.passengers.profile.access'
                ],
                'values'=>[
                    'name'=>'Option profile module in application driver',
                    'text'=>'Perfil'
                ]
            ],
            [
                'find'=>[
                    'key'=>'app.driver.passengers.services.access'
                ],
                'values'=>[
                    'name'=>'Option travels module in application driver',
                    'text'=>'Viajes'
                ]
            ],
            [
                'find'=>[
                    'key'=>'app.driver.passengers.places.access'
                ],
                'values'=>[
                    'name'=>'Option places module in application driver',
                    'text'=>'Mis lugares'
                ]
            ],
            [
                'find'=>[
                    'key'=>'app.driver.drivers.profile.access'
                ],
                'values'=>[
                    'name'=>'Option profile for drivers module in application driver',
                    'text'=>'Mis lugares'
                ]
            ],
            [
                'find'=>[
                    'key'=>'app.driver.drivers.services.history.access'
                ],
                'values'=>[
                    'name'=>'Option services for drivers module in application driver',
                    'text'=>'Historial de Servicios'
                ]
            ],
        ]);
        
    }
    
}
