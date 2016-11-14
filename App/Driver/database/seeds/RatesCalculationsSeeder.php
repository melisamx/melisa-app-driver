<?php

use Illuminate\Database\Seeder;

class RatesCalculationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('RatesCalculations')->insert([
            [
                'id'=>'0985f322-9a19-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'c5091191-9a18-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'eed86931-9a1b-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'b2b66d2e-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'fa93a98d-9a1b-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'d7aa537d-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'11a0adbb-9a1c-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'210a2e96-9a1c-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'611fedf4-9a1c-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'ccafd43a-9a1a-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'72c3066c-9a1c-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'0054e38a-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'a2391da6-9a1c-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'2afb3124-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
            [
                'id'=>'9e86a980-9a1c-11e6-b65e-080027f62005',
                'idRate'=>'173f832d-9a18-11e6-b65e-080027f62005',
                'idRateConcept'=>'4dbdb72c-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
            ],
        ]);
        
    }
}
