<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PassengersStatus extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'PassengersStatus';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
