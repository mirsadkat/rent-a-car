<?php

namespace App\Http\Controllers;
use DB;

class VehiclesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $vehicles = DB::table('vehicles')->get();
        return view('vehicles')->with(array('vehicles' => $vehicles));
    }
}
