<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Modules\PassengerViewSeeder::class);
        
    }
    
}
