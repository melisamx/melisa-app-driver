<?php 

Route::group([
    'prefix'=>'passengers',
    'namespace'=>'Passengers'
], function() {
    
    require realpath(base_path() . '/routes/modules/passengers.php');
    
});
