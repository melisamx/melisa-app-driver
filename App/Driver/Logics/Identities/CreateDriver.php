<?php namespace App\Driver\Logics\Identities;

use App\Core\Logics\Identities\AddIdentity;
use Melisa\core\LogicBusiness;
use App\Driver\Repositories\DriversRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreateDriver
{    
    use LogicBusiness;
    
    protected $addIdentity;
    protected $drivers;

    public function __construct(AddIdentity $addIdentity, DriversRepository $drivers) {
        
        $this->addIdentity = $addIdentity;
        $this->drivers = $drivers;
        
    }
    
    public function init($idUser, array $input) {
        
        $ids = $this->addIdentity->init($idUser, $input, 'driver', true);
        
        if( !$ids) {
            
            return false;
            
        }
        
        if( !$this->drivers->create([
            'id'=>$ids['idIdentity'],
            'idVehicle'=>$input['idVehicle'],
            'idPeople'=>$ids['idPeople'],
        ])) {
            
            $this->addIdentity->rollback();            
            return $this->error('Imposible create driver identity');
            
        }
        
        $event = [
            'profileKey'=>'driver',
            'idUser'=>$idUser,
            'idPeople'=>$ids['idPeople'],
            'idIdentity'=>$ids['idIdentity'],
        ];
        
        $this->addIdentity->commit();
        return $event;
        
    }
    
}
