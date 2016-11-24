<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;

class MenusOptionsSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(MenusSeeder::class);
        $this->call(OptionsSeeder::class);
        
        app('App\Core\Logics\Menus\Install')->init([
            'app.driver.drivers.main'=>[
                'app.driver.drivers.profile.view.access',
                'app.driver.drivers.services.history.view.access',
            ],
            'app.driver.passengers.main'=>[
                'app.driver.passengers.profile.view.access',
                'app.driver.passengers.services.view.access',
                'app.driver.passengers.places.view.access',
            ],
        ]);
        
    }
    
}
