<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarsRequest;
use Illuminate\Http\Request;
use App\Vehicle;


class AdminCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vehicles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarsRequest $request)
    {
        Vehicle::create($request->all());
        return redirect()->back()->with('message', 'Vehicle Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        return view('admin.vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarsRequest $request, Vehicle $vehicle)
    {
        $this->validate(request(), [
            'marka' => 'required',
            'model' => 'required',
            'godiste' => 'required',
            'tip' => 'required',
            'gorivo' => 'required',
            'kubikaza' => 'required',
            'slika' => 'required',
            
        ]);

        $user->name = request('marka');
        $user->email = request('model');
        $user->phone = request('godiste');
        $user->role_id = request('tip');
        $user->role_id = request('gorivo');
        $user->role_id = request('kubikaza');
        $user->role_id = request('slika');
        

        return redirect()->back()->with('message', 'Vehicle updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
