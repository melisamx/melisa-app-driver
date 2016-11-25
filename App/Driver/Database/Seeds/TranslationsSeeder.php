<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\UpdateOrCreate;

class TranslationsSeeder extends Seeder
{
    use UpdateOrCreate;
    
    public function run()
    {
        
        $this->updateOrCreate('App\Core\Models\Translations', [
            [
                'find'=>[
                    'idTranslationLanguage'=>'es',
                    'key'=>'option.driver.passengers.profile.view.access',
                ],
                'values'=>[
                    'text'=>'Ver perfil'
                ]
            ],
            
        ]);
        
    }
    
}
