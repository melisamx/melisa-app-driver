<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\Base;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
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
