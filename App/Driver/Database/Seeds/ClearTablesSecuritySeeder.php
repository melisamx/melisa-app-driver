<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use App\Core\Models\Modules;
use App\Core\Models\Menus;
use App\Core\Models\Options;
use App\Core\Models\Tasks;

class ClearTablesSecuritySeeder extends Seeder
{
    
    public function run()
    {
        
        Modules::where('id', '<>', 0)->delete();
        Menus::where('id', '<>', 0)->delete();
        Options::where('id', '<>', 0)->delete();
        Tasks::where('id', '<>', 0)->delete();
        
    }
    
}
