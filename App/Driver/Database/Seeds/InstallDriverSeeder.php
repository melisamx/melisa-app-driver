<?php namespace App\Driver\Database\Seeds;

use App\Driver\Models\Rates;
use App\Driver\Models\RatesConcepts;
use App\Driver\Models\RatesCalculations;
use Melisa\Laravel\Database\InstallSeeder;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class InstallDriverSeeder extends InstallSeeder
{
    
    public function installRate($name, array $values = []) {
        
        $identity = $this->findIdentity('Developer');
        
        $values ['idIdentityCreator']= $identity->id;
        $values ['isDefault']= isset($values['isDefault']) ? $values['isDefault'] : false;
        
        Rates::updateOrCreate([
            'name'=>$name,
        ], $values);
        
    }
    
    public function installRateConcept($key, array $values = []) {
        
        $identity = $this->findIdentity('Developer');
        
        $values ['idIdentityCreator']= $identity->id;
        
        RatesConcepts::updateOrCreate([
            'key'=>$key,
        ], $values);
        
    }
    
    public function findRate($name) {
        
        return Rates::where('name', $name)->firstOrFail();
        
    }
    
    public function findRateConcept($key) {
        
        return RatesConcepts::where('key', $key)->firstOrFail();
        
    }
    
    public function installRateCalculation($rateName, $rateConceptKey, array $values = []) {
        
        $rate = $this->findRate($rateName);
        $rateConcept = $this->findRateConcept($rateConceptKey);
        $identity = $this->findIdentity('Developer');
        
        $values ['idIdentityCreator']= $identity->id;
        $values ['active']= isset($values['active']) ? $values['active'] : true;
        $values ['required']= isset($values['required']) ? $values['required'] : true;
        
        RatesCalculations::updateOrCreate([
            'idRate'=>$rate->id,
            'idRateConcept'=>$rateConcept->id,
        ], $values);
        
    }
    
}
