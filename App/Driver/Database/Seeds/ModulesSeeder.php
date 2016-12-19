<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ModulesSeeder extends Seeder
{
    
    public function run()
    {
        
        $this->call(Modules\PassengerViewSeeder::class);
        
    }
    
}
