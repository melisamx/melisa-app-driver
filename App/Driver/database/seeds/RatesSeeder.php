<?php

use Illuminate\Database\Seeder;
use App\Driver\Models\Rates;
use Melisa\Laravel\Database\IdSeeder;

class RatesSeeder extends Seeder
{
    
    use IdSeeder;
    
    public function run()
    {
        
        $id = $this->getId();
        
        Rates::firstOrCreate([
            'id'=>$id,
            'idIdentityCreator'=>$id,
            'name'=>'BASICA',
            'isDefault'=>true,
        ]);
        
    }
    
}
