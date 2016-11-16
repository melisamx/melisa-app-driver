<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

class ServicesStatus extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'ServicesStatus';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
