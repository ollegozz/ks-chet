<?php

namespace App\Http\Controllers;

use DB;
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
        $request->validate([
            'counter_id' => 'required|exists:counters,id',
            'value'      => [
                'required',
                'integer',
                function ($attribute, $value, $fail) use ($request) {

                    $lastRow = DB::table('counter_data')
                        ->where('counter_id', $request->input('counter_id'))
                        ->orderBy('created_at', 'desc')
                        ->first();

                    if ($value < ($lastRow->value ?? 0)) {
                        $fail(__('Counter value should not be less'));
                    }

                },
            ],
        ]);

        CounterData::create([
            'value'      => $request->input('value'),
            'counter_id' => $request->input('counter_id'),
        ]);

        return redirect('/home')->with('status', 'Counter value has been saved!');
    }
}
