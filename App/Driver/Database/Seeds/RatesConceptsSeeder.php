<?php namespace App\Driver\Database\Seeds;

use App\Driver\Database\Seeds\InstallDriverSeeder;

class RatesConceptsSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->installRateConcept('base', [
            'name'=>'BASE',
            'formule'=>'{% set total = total + rc.base %}',
            'defaultValue'=>5.8,
            'order'=>0,
        ]);
        
        $this->installRateConcept('porMinuto', [
            'name'=>'POR MINUTO',
            'formule'=>'{% set total = total + rc.porMinuto * service.totalDuration %}',
            'defaultValue'=>1.5,
            'order'=>1,
        ]);
        
        $this->installRateConcept('porKilometro', [
            'name'=>'POR KILOMETRO',
            'formule'=>'{% set total = total + rc.porKilometro * service.totalDistance %}',
            'defaultValue'=>1.5,
            'order'=>2,
        ]);
        
        $this->installRateConcept('minima', [
            'name'=>'MÍNIMA',
            'formule'=>'{% if rc.minima is defined %}        {% if total < rc.minima %}                {% set total = rc.minima %}        {% endif %}{% endif %}',
            'defaultValue'=>25,
            'order'=>3,
        ]);
        
        $this->installRateConcept('decuento10', [
            'name'=>'DESCUENTO DEL 10%',
            'formule'=>'{% if rc.descuento10 %}{% set total = total - (total * rc.descuento10 / 100) %}{% endif %}',
            'defaultValue'=>10,
            'order'=>4,
        ]);
        
        $this->installRateConcept('descuentoFinSemana10', [
            'name'=>'DESCUENTO DE FIN DE SEMANA',
            'formule'=>'{% if rc.descuentoFinSemana10 is defined %}        {% if hoy.dia in [5,6,7] %}                {% set total = total - (total * rc.descuentoFinSemana10 / 100) %}        {% endif %}{% endif %}',
            'defaultValue'=>10,
            'order'=>5,
        ]);
        
        $this->installRateConcept('cancelacion', [
            'name'=>'CANCELACIÓN',
            'formule'=>'{% if rc.cancelacion is defined %}        {% set total = rc.cancelacion %}{% endif %}',
            'defaultValue'=>25,
            'order'=>6,
        ]);
        
        $this->installRateConcept('cuponViajeGratis', [
            'name'=>'CUPÓN DE VIAJE GRATIS',
            'formule'=>'{% if rc.cuponViajeGratis is defined %}        {% set total = rc.cuponViajeGratis %}{% endif %}',
            'defaultValue'=>0,
            'order'=>7,
        ]);
        
    }
}
