<?php

namespace Textil\Http\Controllers;

use Illuminate\Http\Request;
use Textil\Carde;

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
//    public function index()
//    {
//        return view('home');
//    }

    public function index()
    {
//        return view('home');
        $cardes = Carde::inRandomOrder()->take(3)->get();
        return view('home', compact('cardes'));
    }
}
