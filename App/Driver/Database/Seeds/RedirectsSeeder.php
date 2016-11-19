<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;
use Melisa\Laravel\Database\FindApplication;
use Melisa\Laravel\Database\FindProfile;
use App\Core\Models\Redirects;
use App\Core\Models\RedirectsProfiles;

class RedirectsSeeder extends Seeder
{
    
    use IdSeeder, FindApplication, FindProfile;
    
    public function run()
    {
        
        $id = $this->getId();
        $application = $this->findApplication('driver');
        $profile = $this->FindProfile('driver');
        
        $redirect = Redirects::firstOrCreate([
            'name'=>'Redirect Drivers to Application Driver',            
        ], [
            'idApplication'=>$application->id,
            'idIdentityCreator'=>$id,
            'description'=>'Redirect all identities Drivers to Application Driver',
            'path'=>'driver'
        ]);
        
        RedirectsProfiles::firstOrCreate([
            'idRedirect'=>$redirect->id,
            'idProfile'=>$profile->id,
        ], [
            'idIdentityCreator'=>$id,
        ]);
        
    }
    
}
