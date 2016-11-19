<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

class RatesConcepts extends BaseUuid
{
    
    protected $connection = 'app';
    protected $table = 'RatesConcepts';
    
    protected $fillable = [
        'id', 'idIdentityCreator', 'name', 'key', 'formule',  'active', 'order',
        'idIdentityModification', 'defaultValue'
    ];
    
}