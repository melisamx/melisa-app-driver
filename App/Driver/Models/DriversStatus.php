<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

class DriversStatus extends BaseUuid
{
    
    protected $connection = 'app';
    
    protected $fillable = [
        'id', 'name'
    ];
    
}
