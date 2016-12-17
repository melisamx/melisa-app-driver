<?php namespace App\Driver\Database\Seeds;

use App\Driver\Database\Seeds\InstallDriverSeeder;

class RatesSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->installRate('BASICA', [
            'isDefault'=>true,
        ]);
        
    }
    
}
