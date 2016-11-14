<?php namespace App\Driver\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Core\Http\Requests\AddIdentity;
use App\Driver\Logics\Identities\CreateDriver;

class IdentitiesController extends Controller
{

    /**
     * Add driver
     *
     * @return \Illuminate\Http\Response
     */
    public function addDriver(AddIdentity $request, CreateDriver $createDriver)
    {
        
        $output = $createDriver->init($request->user()->id, $request->allValid());
        
        return response()->create($output);
        
    }
    
}
