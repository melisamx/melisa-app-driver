<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\UpdateOrCreate;

class ApplicationSeeder extends Seeder
{
    
    use UpdateOrCreate;
    
    public function run()
    {
        
        $this->UpdateOrCreate('App\Core\Models\Applications', [
            [
                'find'=>[
                    'key'=>'driver',
                ],
                'values'=>[
                    'name'=>'Driver',
                    'description'=>'Application Driver',
                    'nameSpace'=>'Melisa.driver',
                    'typeSecurity'=>'arat'
                ]
            ]
        ]);
        
    }
    
}
