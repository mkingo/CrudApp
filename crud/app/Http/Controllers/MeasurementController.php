<?php

namespace App\Http\Controllers;

use App\Models\Measurement;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $measurements = Measurement::latest()->paginate(5);
    
        return view('measurements.index',compact('measurements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('measurements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Client $client)
    {
        //
        $request->validate([
            'weight' => 'required',
            'height' => 'required',
            'blood_pressure'=> 'required',
            'sugar'=> 'required',
            'client_id'=> \App\Models\Client::all()->where('client_id',$client->id)
            
            
        ]);
    
        
     
        return redirect()->route('measurements.index')
                        ->with('success','Measurement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function show(Measurement $measurement)
    {
        //
        return view('measurements.show',compact('measurement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function edit(Measurement $measurement)
    {
        //
        return view('measurements.edit',compact('measurement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Measurement $measurement)
    {
        //
        $request->validate([
            'weight' => 'required',
            'height' => 'required',
            'blood_pressure'=> 'required',
            'sugar'=> 'required',
            
        ]);
        $measurement->update($request->all());
    
        return redirect()->route('measurements.index')
                        ->with('success','Measurement Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Measurement  $measurement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Measurement $measurement)
    {
        //
        $measurement->delete();
    
        return redirect()->route('measurements.index')
                        ->with('success','Measurement deleted successfully');
    }
}
