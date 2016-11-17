<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class ApplicationSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->firstOrCreate('App\Core\Models\Applications', [
            [
                'find'=>[
                    'key'=>'driver',
                ],
                'values'=>[
                    'name'=>'Driver',
                    'key'=>'driver',
                    'description'=>'Application Driver',
                    'nameSpace'=>'Melisa.driver',
                    'typeSecurity'=>'arat'
                ]
            ]
        ]);
        
    }
    
}
