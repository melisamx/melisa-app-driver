<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriversDocumentsStatusSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->updateOrCreate('App\Driver\Models\DriversDocumentsStatus', [
            [
                'id'=>1,
                'name'=>'NUEVO',
            ],
            [
                'id'=>2,
                'name'=>'APROBADO',
            ],
            [
                'id'=>3,
                'name'=>'CANCELADO',
            ],
        ]);
        
    }
    
}
