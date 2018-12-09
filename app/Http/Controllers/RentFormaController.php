<?php

namespace App\Http\Controllers;

use App\RentForma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class RentFormaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new RentForma;
        $user->full_name = Input::get("full_name");
        $user->phone = Input::get("phone");
        $user->email = Input::get("email");
        $user->pickup_date = Input::get("pickup_date");
        $user->pickup_time = Input::get("pickup_time");
        $user->dropoff_date = Input::get("dropoff_date");
        $user->dropoff_time = Input::get("dropoff_time");
        $user->car = Input::get("car");
        $user->save();
        return redirect()->back()->with('message', 'Request Sent Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RentForma  $rentForma
     * @return \Illuminate\Http\Response
     */
    public function show(RentForma $rentForma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RentForma  $rentForma
     * @return \Illuminate\Http\Response
     */
    public function edit(RentForma $rentForma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RentForma  $rentForma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RentForma $rentForma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RentForma  $rentForma
     * @return \Illuminate\Http\Response
     */
    public function destroy(RentForma $rentForma)
    {
        //
    }
}
