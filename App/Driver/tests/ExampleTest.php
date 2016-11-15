<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        
//        $response = $this->call('GET', '/api/status');
        
        $this->get('/api/status')
            ->seeJsonStructure([
                'success'=>true
            ]);
//        $this->visit('/')
//             ->see('Laravel');
    }
}
