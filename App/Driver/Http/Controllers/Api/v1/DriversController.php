<?php namespace App\Driver\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Core\Http\Requests\AddIdentity;
use App\Driver\Logics\Identities\CreateDriver;

class DriversController extends Controller
{

    /**
     * Create identity driver
     *
     * @return \Illuminate\Http\Response
     */
    public function create(AddIdentity $request, CreateDriver $createDriver)
    {
        
        $output = $createDriver->init($request->user()->id, $request->allValid());
        
        return response()->create($output);
        
    }
    
}
