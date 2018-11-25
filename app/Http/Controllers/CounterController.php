<?php

namespace App\Http\Controllers;

use App\Counter;
use App\CounterData;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function sendValue(Request $request)
    {
        // Todo: Validation, check if new value < old value.

        CounterData::create([
            'value'      => $request->input('value'),
            'counter_id' => $request->input('counter_id'),
        ]);

        return redirect('/home')->with('status', 'Counter value has been saved!');
    }
}
