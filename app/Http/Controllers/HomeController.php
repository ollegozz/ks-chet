<?php

namespace App\Http\Controllers;

use App\Counter;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::query()->where('account_id', auth()->user()->id)->get();

        return view('home', compact('counters'));
    }
}
