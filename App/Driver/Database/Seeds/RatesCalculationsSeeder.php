<?php namespace App\Driver\Database\Seeds;

use App\Driver\Database\Seeds\InstallDriverSeeder;

class RatesCalculationsSeeder extends InstallDriverSeeder
{
    
    public function run()
    {
        
        $this->installRateCalculation('BASICA', 'base');
        $this->installRateCalculation('BASICA', 'porMinuto');
        $this->installRateCalculation('BASICA', 'porKilometro');
        $this->installRateCalculation('BASICA', 'minima');
        $this->installRateCalculation('BASICA', 'decuento10', [
            'required'=>false
        ]);
        $this->installRateCalculation('BASICA', 'descuentoFinSemana10', [
            'required'=>false
        ]);
        $this->installRateCalculation('BASICA', 'cancelacion', [
            'required'=>false
        ]);
        $this->installRateCalculation('BASICA', 'cuponViajeGratis', [
            'required'=>false
        ]);
        
        
    }
}
