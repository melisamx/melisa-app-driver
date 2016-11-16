<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

class DriversDocumentsStatus extends Base
{
    
    protected $connection = 'app';
    
    protected $table = 'DriversDocumentsStatus';
    
    protected $fillable = [
        'id', 'name'
    ];
    
    public $timestamps = false;
    
    public $incrementing = false;
    
}
