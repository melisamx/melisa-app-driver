<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\UpdateOrCreate;

class MenusSeeder extends Seeder
{
    use UpdateOrCreate;
    
    public function run()
    {
        
        $this->updateOrCreate('App\Core\Models\Menus', [
            [
                'find'=>[
                    'key'=>'app.driver.main', 
                ],
                'values'=>[
                    'name'=>'Menu main in Application Driver',
                ]
            ],   
            [
                'find'=>[
                    'key'=>'app.driver.passengers.main', 
                ],
                'values'=>[
                    'name'=>'Menu main for passengers in Application Driver',
                ]
            ],   
            [
                'find'=>[
                    'key'=>'app.driver.drivers.main', 
                ],
                'values'=>[
                    'name'=>'Menu main for drivers in Application Driver',
                ]
            ],   
        ]);
        
    }
    
}
