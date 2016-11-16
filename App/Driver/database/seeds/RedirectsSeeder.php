<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;
use App\Core\Models\Redirects;
use App\Core\Models\RedirectsProfiles;

class RedirectsSeeder extends Seeder
{
    
    use IdSeeder;
    
    public function run()
    {
        
        $id = $this->getId();
        
        Redirects::firstOrCreate([
            'id'=>$id,
            'idApplication'=>$id,
            'idIdentityCreator'=>$id,
            'name'=>'Redirect Drivers to Application Driver',
            'description'=>'Redirect all identities Drivers to Application Driver',
            'path'=>'application/driver'
        ]);
        
        RedirectsProfiles::firstOrCreate([
            'id'=>$id,
            'idRedirect'=>$id,
            'idIdentityCreator'=>$id,
            'idProfile'=>$this->getIdInt(),
        ]);
        
    }
    
}
