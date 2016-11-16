<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

class VehiclesTypes extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'VehiclesTypes';
    
    protected $fillable = [
        'idVehicleClass', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
