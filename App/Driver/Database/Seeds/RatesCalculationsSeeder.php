<?php namespace App\Driver\Database\Seeds;

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;
use Melisa\Laravel\Database\FirstOrCreate;

class RatesCalculationsSeeder extends Seeder
{    
    use IdSeeder, FirstOrCreate;
    
    public function run()
    {
        
        $id = $this->getId();
        
        $this->FirstOrCreate('App\Driver\Models\RatesCalculations', [
            [
                'id'=>'0985f322-9a19-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'c5091191-9a18-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'eed86931-9a1b-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'b2b66d2e-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'fa93a98d-9a1b-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'d7aa537d-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'11a0adbb-9a1c-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'210a2e96-9a1c-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'611fedf4-9a1c-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'ccafd43a-9a1a-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'72c3066c-9a1c-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'0054e38a-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'a2391da6-9a1c-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'2afb3124-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
            [
                'id'=>'9e86a980-9a1c-11e6-b65e-080027f62005',
                'idRate'=>$id,
                'idRateConcept'=>'4dbdb72c-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>$id,
            ],
        ]);
        
    }
}
