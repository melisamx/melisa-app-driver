<?php namespace App\Driver\Models;

use Illuminate\Database\Eloquent\Model;
use Melisa\core\orm\ErrorHumanTrait;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Drivers extends Model
{
    
    use ErrorHumanTrait;
    
    protected $connection = 'app';
    protected $table = 'Drivers';
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'idVehicle', 'idPeople'
    ];
    
}
