<?php namespace App\Driver\Http\Controllers\Modules\Passengers;

use Melisa\Laravel\Http\Controllers\Controller;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ProfileController extends Controller
{
    
    public function view()
    {
        
        return [
            'success'=>true,
            'data'=>[
                'urlSubmit'=>'/driver.php/passengers/profile/update',
                'wrapper'=>[
                    'title'=>'Mi perfil'
                ],
                'i18n'=>[
                    'txtName'=>'Nombre',
                    'btnSave'=>'Guardar',
                    'frmMessageLoading'=>'Guardando cambios'
                ]
            ]
        ];
        
    }
    
}
