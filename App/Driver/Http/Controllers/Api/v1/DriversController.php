<?php namespace App\Driver\Http\Controllers\Api\v1;

use Melisa\Laravel\Http\Controllers\Controller;
use App\Core\Http\Requests\CreateIdentity as Request;
use App\Driver\Logics\Identities\CreateDriver as Logic;

/**
 * 
 *
 * @author Luis Josafat Heredia Contreras
 */
class DriversController extends Controller
{

    /**
     * Create identity driver
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Logic $createDriver)
    {
        
        $output = $createDriver->init($request->user()->id, $request->allValid());
        
        return response()->create($output);
        
    }
    
}
