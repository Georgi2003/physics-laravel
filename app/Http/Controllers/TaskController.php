<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magnitude;
use App\Models\Formula;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magnitudes = Magnitude::all();

        return view('tasks.index', [           
            'allMagnitudes' => $magnitudes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function parameters(Request $request)
    {
        $formula = Formula::where('magnitude_id', $request['magnitude_id']) -> first();

        return view('tasks.parameters', [
            'parm' => 1,
            'magnitude_id' => $request['magnitude_id'],
            'input_count' => $formula->parameters_count
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function problemSolving(Request $request, $magnitude_id)
    {
        $formula = Formula::where('magnitude_id', $request['magnitude_id']) -> first();
        $mathFormula = $formula->formula;
        
        return $formula->magnitude->symbol . "= " . $this->calculateMathFormula($mathFormula, $request['param']);
    }

    public function calculateMathFormula($mathFormula, $params)
    {
        $len = strlen($mathFormula);
        $paramIndex = 0;
        $res = 0;

        for($i = 0; $i < $len; $i++){
            if($mathFormula[$i] == '*'){
                //will use this later for other math operations
            } elseif ($res == 0) {
                $res = $params[$paramIndex++];
            } else {
                $res *= $params[$paramIndex++];
            }
        }
        
        return $res;
    }
}
