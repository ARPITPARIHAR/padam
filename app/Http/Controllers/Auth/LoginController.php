<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    //Custom login function
    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        $user = User::where('email', $input['email'])->first();
        if ($user) {
            if ($user->email_verified_at == '' || $user->email_verified_at == null) {
                return redirect()->route('login')
                    ->with('error', 'This email is not verified, please check your email and validate it.');
            }
            if ($user->status != 1) {
                return redirect()->route('login')
                    ->with('error', 'Your account is inactive.');
            }
        }else {
            return redirect()->route('login')
                ->with('error', 'Invalid login credentials!');
        }

            if (Auth::attempt(array('email' => $input['email'], 'password' => $input['password']))) {
                if (auth()->user()->role == 1) {
                    return redirect()->route('admin.home');
                } else {
                    return redirect()->route('login')->with('error', 'Invalid login credentials!');
                }
            } else {
                return redirect()->route('login')->with('error', 'Invalid login credentials!');
            }
    }
}