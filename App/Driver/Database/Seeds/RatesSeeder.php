<?php namespace App\Driver\Database\Seeds;

use App\Driver\Database\Seeds\InstallDriverSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class RatesSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->installRate('BASICA', [
            'isDefault'=>true,
        ]);
        
    }
    
}
