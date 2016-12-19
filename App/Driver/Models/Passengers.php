<?php namespace App\Driver\Models;

use Illuminate\Database\Eloquent\Model;
use Melisa\core\orm\ErrorHumanTrait;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class Passenger extends Model
{
    
    use ErrorHumanTrait;
    
    protected $connection = 'app';
    protected $table = 'Passengers';
    public $timestamps = false;
    
    protected $fillable = [
        'id', 'idPassengerStatus', 'idPeople'
    ];
    
}
