<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Session\Middleware\AuthenticateSession;
use Session;
use Its\Sso\OpenIDConnectClient;
use Its\Sso\OpenIDConnectClientException;

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
        // return view('auth.login');
        if (!Session::has('id_token')) {
            try{
                $provider ='https://dev-my.its.ac.id';
                $clientId = '7B130245-DBA6-461B-A86F-8D4BB7B354AD';
                $clientSecret = 'tkprs5jy580sc8cs8ogcko0g';
                $redirectUri = 'https://dev-softwarehub.its.ac.id/auth';
                $scope = 'email group phone profile resource role openid';

                $oidc = new OpenIDConnectClient($provider, $clientId, $clientSecret);
                $oidc -> setRedirectURL($redirectUri);
                $oidc->addScope($scope);

                if(strtolower(config('app.env')) != 'production' && strtolower(config('app.env')) != 'prod') {
                    $oidc->setVerifyHost(false);
                    $oidc->setVerifyPeer(false);
                }
                $oidc->authenticate();
                Session::put('id_token', $oidc->getIdToken());
                // dd($oidc->getEmail());
                
                $userInfo = $oidc->requestUserInfo();
                $idToken = $oidc->getIdToken();

                Auth::login($user);
                return redirect()->route('/');
            }
            catch (OpenIDConnectClientException $e) {
                Auth::logout();
                Session::flush();
                Session::save();
                if ($e->getMessage() === self::
                OIDC_ERROR_STATE_UNDETERMINED) {
                return redirect('expired');
                }
                return redirect('error');
            }
        }
        else{
            return view('index');
        }
    }

    public function logout(){
        try{
            $redirect = 'https://dev-my.its.ac.id';
            if (Session::has('id_token')) {
                $accessToken = Session::get('id_token');
                Session::forget('id_token');
                Session::save();

                $provider ='https://dev-my.its.ac.id';
                $clientId = '7B130245-DBA6-461B-A86F-8D4BB7B354AD';
                $clientSecret = 'tkprs5jy580sc8cs8ogcko0g';

                $oidc = new OpenIDConnectClient($provider, $clientId, $clientSecret);
                if(strtolower(config('app.env')) != 'production' && strtolower(config('app.env')) != 'prod') {
                    $oidc->setVerifiyHost(false);
                    $oidc->setVerifiyPeer(false);
                }

                $idToken = session('auth.id_token');
                $oidc->signOut($accessToken, $redirect);
                return redirect()->route('/');
            }
            header("Location: " . $redirect);
            // return redirect()->route('index');
        }
        catch (OpenIDConnectClientException $e) {
            echo $e->getMessage();
        }
    }
    
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);
    //     // $apa = Hash::make($request->password);
    //     // // dd($apa);
    //     // $apa=Auth::attempt($credentials);
    //     // dd($apa);

    //     if(Auth::attempt($credentials)){
    //         $request->session()->regenerate();
    //         $user = User::where('email',  $request->email)->first();
    //         $users = Auth::user($user);
    //         dd($users);
    //             if ($users->level == 'admin') {
    //                 session(['login_session' => 'admin']);
    //                 return redirect()->intended('admin');
    //             } elseif ($users->level == 'user') {
    //                 session(['login_session' => 'user']);
    //                 return redirect()->intended('/');
    //             }
    //             return redirect()->intended('/');
    //     }
    //     return redirect('login')->withInput()->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    // }

    // public function logout(Request $request) {
    //     $request->session()->flush();
    //     Auth::logout();
    //     return redirect('/');
    //   }
}