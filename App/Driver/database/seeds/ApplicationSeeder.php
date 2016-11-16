<?php

use Illuminate\Database\Seeder;
use Melisa\Laravel\Database\IdSeeder;

class ApplicationSeeder extends Seeder
{
    
    use IdSeeder;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('applications')->insert([
            [
                'id'=>$this->getId(),
                'name'=>'Driver',
                'key'=>'driver',
                'description'=>'Application Driver',
                'nameSpace'=>'Melisa.driver',
                'typeSecurity'=>'arat'
            ],
        ]);
        
    }
}
