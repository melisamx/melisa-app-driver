<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;

class MenusOptionsSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(MenusSeeder::class);
        $this->call(OptionsSeeder::class);
        
        app('App\Core\Logics\Menus\Install')->init([
            'app.driver.passengers.main'=>[
                'app.driver.passengers.profile.access',
                'app.driver.passengers.services.access',
                'app.driver.passengers.places.access',
            ],
            'app.driver.drivers.main'=>[
                'app.driver.drivers.profile.access',
                'app.driver.drivers.services.history.access',
            ],
        ]);
        
    }
    
}
