<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(DriversStatusSeeder::class);
        $this->call(ServicesStatusSeeder::class);
        $this->call(PassengersStatusSeeder::class);
        $this->call(VehiclesClassSeeder::class);
        $this->call(VehiclesTypeSeeder::class);
        $this->call(DriversDocumentsTypeSeeder::class);
        $this->call(DriversDocumentsStatusSeeder::class);
        $this->call(VehiclesSeeder::class);
        $this->call(RatesSeeder::class);
        $this->call(RatesConceptsSeeder::class);
        $this->call(RatesCalculationsSeeder::class);
        
    }
}
