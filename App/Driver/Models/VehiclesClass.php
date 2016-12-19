<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class VehiclesClass extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'VehiclesClass';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
