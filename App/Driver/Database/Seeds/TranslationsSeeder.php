<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

class TranslationsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->i18n('es', 'option.driver.passengers.profile.view.access', 'Ver perfil');
        
    }
    
}
