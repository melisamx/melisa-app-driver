<?php namespace App\Driver\Logics\Identities;

use App\Core\Logics\Identities\AddIdentity;
use Melisa\core\LogicBusiness;
use App\Driver\Repositories\PassengersRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class CreatePassenger
{
    
    use LogicBusiness;
    
    protected $addIdentity;
    protected $passengers;

    public function __construct(AddIdentity $addIdentity, PassengersRepository $passengers) {
        
        $this->addIdentity = $addIdentity;
        $this->passengers = $passengers;
        
    }
    
    public function init($idUser, array $input) {
        
        $ids = $this->addIdentity->init($idUser, $input, 'passenger', true);
        
        if( !$ids) {
            
            return false;
            
        }
        
        if( !$this->passengers->create([
            'id'=>$ids['idIdentity'],
            'idPeople'=>$ids['idPeople'],
        ])) {
            
            $this->addIdentity->rollback();            
            return $this->error('Imposible create identity passenger');
            
        }
        
        $event = [
            'profileKey'=>'passenger',
            'idUser'=>$idUser,
            'idPeople'=>$ids['idPeople'],
            'idIdentity'=>$ids['idIdentity'],
        ];
        
        $this->addIdentity->commit();
        return $event;
        
    }
    
}
