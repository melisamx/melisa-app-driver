<?php 

Route::get('/passengers', 'PassengersController@index');

Route::group([
    'prefix'=>'passengers/manifest'
], function() {
    
    Route::get('classic', 'PassengersController@manifestClassic');
    Route::get('modern', 'PassengersController@manifestModern');

});

Route::get('/drivers', 'DriversController@index');

Route::group([
    'prefix'=>'drivers/manifest'
], function() {
    
    Route::get('classic', 'DriversController@manifestClassic');
    Route::get('modern', 'DriversController@manifestModern');

});

Route::group([
    'prefix'=>'modules',
    'namespace'=>'Modules'
], function() {
    
    require realpath(base_path() . '/routes/modules.php');
    
});
