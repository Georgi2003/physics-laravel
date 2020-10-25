<?php

namespace App\Http\Controllers;

use App\Models\Magnitude;
use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Requests\MagnitudePost;

class MagnitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magnitudes = Magnitude::all();
        
        return view('magnitudes.index', [
            'allMagnitudes' => $magnitudes     
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magnitudes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MagnitudePost $request, Magnitude $magnitude)
    {
        $magnitude = new Magnitude;
        $magnitude->name = $request['name'];
        $magnitude->symbol = $request['symbol'];
        $magnitude->save();

        return redirect('/magnitudes')->with('success', 'Успешно добавихте величина!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magnitude  $magnitude
     * @return \Illuminate\Http\Response
     */
    public function show(Magnitude $magnitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magnitude  $magnitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Magnitude $magnitude)
    {
        return view('magnitudes.edit', [
            'magnitude' => $magnitude
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magnitude  $magnitude
     * @return \Illuminate\Http\Response
     */
    public function update(MagnitudePost $request, Magnitude $magnitude)
    {
        $magnitude->name = $request['name'];;
        $magnitude->symbol = $request['symbol'];;

        $magnitude->save();

        return redirect('/magnitudes')->with('success', 'Успешно обновихте величина!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magnitude  $magnitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magnitude $magnitude)
    {
        $magnitude->delete();

        return redirect()->back();
    }
}
