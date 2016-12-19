<?php namespace App\Driver\Models;

use Melisa\Laravel\Models\BaseUuid;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Rates extends BaseUuid
{
    
    protected $connection = 'app';
    protected $table = 'Rates';
    
    protected $fillable = [
        'id', 'idIdentityCreator', 'idScope', 'name', 'active', 'isDefault', 
        'idIdentityModification'
    ];
    
}
