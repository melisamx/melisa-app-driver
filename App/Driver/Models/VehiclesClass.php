<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

class VehiclesTypes extends Base
{
    
    protected $connection = 'app';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamp = false;
    
}
