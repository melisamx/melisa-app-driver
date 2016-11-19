<?php 

Route::get('/home', 'HomeController@index');
Route::get('/driver', 'DriverController@index');

Route::group([
    'prefix'=>'/driver/manifest'
], function() {
    
    Route::get('/classic', 'DriverController@manifestClassic');
    Route::get('/modern', 'DriverController@manifestModern');

});
