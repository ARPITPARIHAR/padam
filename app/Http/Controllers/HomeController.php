<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if (Auth::check() && Auth::user()->role == '1'){
        //     // return view('admin.home');
        //     return redirect()->route('admin.home');
        // }else{
        //     return redirect()->route('login');
        // }
        if (Auth::check() && Auth::user()->role == '1'){
            // return view('admin.home');
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('user.home');
        }
        // return view('home');
    }
}