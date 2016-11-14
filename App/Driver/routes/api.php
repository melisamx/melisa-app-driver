<?php 

Route::group([
    'prefix'=>'v1',
    'middleware'=>'auth.basic',
    'namespace' =>'v1'
], function() {
    
    Route::post('drivers', 'DriversController@create');
    Route::post('passengers', 'PassengersController@create');
    
});
