<?php namespace App\Driver\Modules\Passengers;

use App\Core\Modules\ManifestSenchaModule;
use App\Core\Logics\Identities\IdentitySession;
use App\Core\Repositories\IdentitiesRepository;
use App\Core\Repositories\UsersRepository;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class ManifesModule extends ManifestSenchaModule
{
    
    public function config() {
        
        /* necessary because it does not work hiding attributes*/
        $user = app(UsersRepository::class)->find(request()->user()->id, [
            'id', 'name', 'email']
        );
        
        $idIdentity = app(IdentitySession::class)->init($user->id);
        $identity = [];
        
        if( $idIdentity) {
            
            $identity = app(IdentitiesRepository::class)->find($idIdentity);
            
        }
        
        $this->jsAdd []= config('googlemaps.api') . '&key=' . config('googlemaps.key');
        
        return [
            'user'=>$user->getAttributes(),
            'appName'=>config('app.name'),
            'urls'=>[
                'realtime'=>config('app.urlRealtime'),
                'identitiesCoordinates'=>'/driver.php/identities/coordinates/',
            ],
            'idIdentity'=>$idIdentity,
            'identity'=>$identity
        ];
        
    }
    
}
