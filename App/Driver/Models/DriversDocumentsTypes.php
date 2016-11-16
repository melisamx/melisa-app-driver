<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

class DriversDocumentsTypes extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'DriversDocumentsTypes';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
