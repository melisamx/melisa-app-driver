<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

class Vehicles extends BaseUuid
{
    
    protected $connection = 'app';
    
    protected $table = 'Vehicles';
    
    protected $fillable = [
        'idVehicleType', 'idIdentityCreator', 'enrollment', 'active', 'brand',
        'model'
    ];
    
}
