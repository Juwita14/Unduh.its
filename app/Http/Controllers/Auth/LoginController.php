<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
// use Illuminate\Session\Middleware\AuthenticateSession;
use Session;

use Illuminate\Support\Facades\Hash;

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
    // protected $redirectTo = RouteServiceProvider::LOGIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        // $apa = Hash::make($request->password);
        // // dd($apa);
        // $apa=Auth::attempt($credentials);
        // dd($apa);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = Auth::user();
                if ($user->level == 'admin') {
                    session(['login_session' => 'admin']);
                    return redirect()->intended('admin');
                } elseif ($user->level == 'user') {
                    session(['login_session' => 'user']);
                    return redirect()->intended('/');
                }
                return redirect()->intended('/');
        }
        return redirect('login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
      }
}








    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }