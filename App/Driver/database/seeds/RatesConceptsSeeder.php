<?php

use Illuminate\Database\Seeder;

class RatesConceptsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::connection('app')->table('RatesConcepts')->insert([
            [
                'id'=>'c5091191-9a18-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'BASE',
                'key'=>'base',
                'formule'=>'{% set total = total + rc.base %}',
                'defaultValue'=>5.8,
                'order'=>0,
            ],
            [
                'id'=>'b2b66d2e-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'POR MINUTO',
                'key'=>'porMinuto',
                'formule'=>'{% set total = total + rc.porMinuto * service.totalDuration %}',
                'defaultValue'=>1.5,
                'order'=>1,
            ],
            [
                'id'=>'d7aa537d-9a19-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'POR KILOMETRO',
                'key'=>'porKilometro',
                'formule'=>'{% set total = total + rc.porKilometro * service.totalDistance %}',
                'defaultValue'=>1.5,
                'order'=>2,
            ],
            [
                'id'=>'210a2e96-9a1c-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'MÍNIMA',
                'key'=>'minima',
                'formule'=>'{% if rc.minima is defined %}        {% if total < rc.minima %}                {% set total = rc.minima %}        {% endif %}{% endif %}',
                'defaultValue'=>25,
                'order'=>3,
            ],
            [
                'id'=>'ccafd43a-9a1a-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'DESCUENTO DEL 10%',
                'key'=>'decuento10',
                'formule'=>'{% if rc.descuento10 %}{% set total = total - (total * rc.descuento10 / 100) %}{% endif %}',
                'defaultValue'=>10,
                'order'=>4,
            ],
            [
                'id'=>'0054e38a-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'DESCUENTO DE FIN DE SEMANA',
                'key'=>'descuentoFinSemana10',
                'formule'=>'{% if rc.descuentoFinSemana10 is defined %}        {% if hoy.dia in [5,6,7] %}                {% set total = total - (total * rc.descuentoFinSemana10 / 100) %}        {% endif %}{% endif %}',
                'defaultValue'=>10,
                'order'=>5,
            ],
            [
                'id'=>'2afb3124-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'CANCELACIÓN',
                'key'=>'cancelacion',
                'formule'=>'{% if rc.cancelacion is defined %}        {% set total = rc.cancelacion %}{% endif %}',
                'defaultValue'=>25,
                'order'=>6,
            ],
            [
                'id'=>'4dbdb72c-9a1b-11e6-b65e-080027f62005',
                'idIdentityCreator'=>'3363e084-70b5-4d88-9384-ceedaa654fb6',
                'name'=>'CUPÓN DE VIAJE GRATIS',
                'key'=>'cuponViajeGratis',
                'formule'=>'{% if rc.cuponViajeGratis is defined %}        {% set total = rc.cuponViajeGratis %}{% endif %}',
                'defaultValue'=>0,
                'order'=>7,
            ],
        ]);
        
    }
}
