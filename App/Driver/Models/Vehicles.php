<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Vehicles extends BaseUuid
{
    
    protected $connection = 'app';
    
    protected $table = 'Vehicles';
    
    protected $fillable = [
        'idVehicleType', 'idIdentityCreator', 'enrollment', 'active', 'brand',
        'model'
    ];
    
}
