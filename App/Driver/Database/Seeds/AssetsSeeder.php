<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\FirstOrCreate;

class AssetsSeeder extends Seeder
{
    
    use FirstOrCreate;
    
    public function run()
    {
        
        $this->firstOrCreate('App\Core\Models\Assets', [
            [
                'find'=>[
                    'id'=>'app.driver.main',
                ],
                'values'=>[
                    'idAssetType'=>1,
                    'name'=>'Application Sencha Main',
                    'path'=>'/driver/js/Application.js',
                ]
            ]
        ]);
        
    }
    
}
