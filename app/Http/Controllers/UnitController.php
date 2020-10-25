<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Magnitude;
use Illuminate\Http\Request;
use App\Http\Requests\UnitPost;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::with(['magnitude'])->get();
        
        return view('units.index', [
            'allUnits' => $units
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

        return view('units.create', [
            'allMagnitudes' => $magnitudes
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnitPost $request)
    {  
        $unit = new Unit;
       
        $unit->unit = $request['unit'];
        $unit->magnitude_id = $request['magnitude_id'];

        $unit->save();

        return redirect('/units')->with('success', 'Успешно добавихте мерна единица!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function edit(Unit $unit)
    {
        $magnitudes = Magnitude::all();

        return view('units.edit', [
            'allMagnitudes' => $magnitudes,
            'unit' => $unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function update(UnitPost $request, Unit $unit)
    {
        $unit->magnitude_id = $request['magnitude_id'];
        $unit->unit = $request['unit'];

        $unit->save();

        return redirect('/units')->with('success', 'Успешно обновихте мерната единица!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return redirect()->back();
    }
}