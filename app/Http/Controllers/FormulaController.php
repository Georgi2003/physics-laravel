<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use Illuminate\Http\Request;
use App\Models\Magnitude;
use App\Http\Requests\FormulaPost;

class FormulaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulas = Formula::all();

        return view('formulas.index', [
            'allFormulas' => $formulas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $magnitudes = Magnitude::all();

        return view('formulas.create', [
            'allMagnitudes' => $magnitudes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormulaPost $request)
    {
        $formula = new Formula;
       
        $formula->formula = $request['formula'];
        $formula->parameters_count = $request['parameters_count'];
        $formula->magnitude_id = $request['magnitude_id'];

        $formula->save();

        return redirect('/formulas')->with('success', 'Успешно добавихте формула!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formula  $formula
     * @return \Illuminate\Http\Response
     */
    public function show(Formula $formula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formula  $formula
     * @return \Illuminate\Http\Response
     */
    public function edit(Formula $formula)
    {
        $magnitudes = Magnitude::all();

        return view('formulas.edit', [
            'allMagnitudes' => $magnitudes,
            'formula' => $formula
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formula  $formula
     * @return \Illuminate\Http\Response
     */
    public function update(FormulaPost $request, Formula $formula)
    {
        $formula->magnitude_id = $request['magnitude_id'];
        $formula->formula = $request['formula'];
        $formula->parameters_count = $request['parameters_count'];
        
        $formula->save();

        return redirect('/formulas')->with('success', 'Успешно обновихте формулата!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formula  $formula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formula $formula)
    {
        $formula->delete();

        return redirect()->back();
    }
}
