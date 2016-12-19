<?php namespace App\Driver\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Driver\Http\Requests\CreatePassengerRequest as Request;
use App\Driver\Logics\Identities\CreatePassenger as Logic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class PassengersController extends Controller
{

    /**
     * Create identity passenger
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Logic $logic)
    {
        
        $output = $logic->init($request->user()->id, $request->allValid());
        
        return response()->create($output);
        
    }
    
}
