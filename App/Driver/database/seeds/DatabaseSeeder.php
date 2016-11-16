<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(DriversSeeder::class);
        $this->call(RedirectsSeeder::class);
        
        $this->call(ServicesStatusSeeder::class);
        $this->call(PassengersStatusSeeder::class);
        $this->call(DriversDocumentsTypesSeeder::class);
        $this->call(DriversDocumentsStatusSeeder::class);
        
        $this->call(RatesSeeder::class);
        $this->call(RatesConceptsSeeder::class);
        $this->call(RatesCalculationsSeeder::class);
        
    }
    
}
