<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

class RatesCalculations extends BaseUuid
{
    
    protected $connection = 'app';
    protected $table = 'RatesCalculations';
    
    protected $fillable = [
        'id', 'idRate', 'idRateConcept', 'idIdentityCreator', 'active', 'order',
        'idIdentityModification', 'required', 'value'
    ];
    
}
