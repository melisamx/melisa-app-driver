<?php namespace App\Driver\Database\Seeds;

use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class TranslationsSeeder extends InstallSeeder
{
    
    public function run()
    {
        
        $this->i18n('es', 'option.driver.passengers.profile.view.access', 'Ver perfil');
        
    }
    
}
