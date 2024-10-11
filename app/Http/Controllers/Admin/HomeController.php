<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(){
        if (Auth::check() && Auth::user()->role == '1'){
            return view('admin.home');
        }else{
            return redirect()->route('login');
        }
    }
}