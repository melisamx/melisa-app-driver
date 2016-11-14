<?php namespace App\Driver\Http\Requests;

use Melisa\Laravel\Http\Requests\Generic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreatePassengerRequest extends Generic
{
    protected $rules = [
        'idUser'=>'required|max:36|exists:users,id',
        'display'=>'required|max:75',
        'displayEspecific'=>'required|max:75',
        'active'=>'required|boolean',
        'isDefault'=>'required|boolean',
        'name'=>'required|max:45',
        'firstName'=>'required|max:45',
        'lastName'=>'required|max:45',
        'gender'=>'required|boolean',
        'nickname'=>'required|max:75',
        'birthday'=>'sometimes',
    ];
    
    public function rules()
    {
        
        return $this->rules;
        
    }
    
}
