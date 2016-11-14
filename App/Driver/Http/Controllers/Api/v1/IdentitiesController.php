<?php namespace App\Driver\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Core\Http\Requests\AddIdentity;
use App\Core\Logics\Identities\AddIdentity as LogicAddIdentity;

class IdentitiesController extends Controller
{

    /**
     * Add driver
     *
     * @return \Illuminate\Http\Response
     */
    public function addDriver(AddIdentity $request, LogicAddIdentity $logic)
    {
        
        $output = $logic->init($request->allValid());
        
        return response()->create($output);
        
    }
    
}
