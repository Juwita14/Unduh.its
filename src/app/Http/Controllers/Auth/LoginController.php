<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Auth\DB;
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
                $provider = env('OIDC_PROVIDER_URL');
                $clientId = env('OIDC_CLIENT_ID');
                $clientSecret = env('OIDC_CLIENT_SECRET');
                $redirectUri = env('OPENID_REDIRECT_URI');
                $scope =  env('OPENID_SCOPE');

                $oidc = new OpenIDConnectClient($provider, $clientId, $clientSecret);
                $oidc -> setRedirectURL($redirectUri);
                $oidc->addScope($scope);

                if(strtolower(config('app.env')) != 'production' && strtolower(config('app.env')) != 'prod') {
                    $oidc->setVerifyHost(false);
                    $oidc->setVerifyPeer(false);
                }
                $oidc->authenticate();
                Session::put('id_token', $oidc->getIdToken());
                
                $userInfo = $oidc->requestUserInfo();
                $idToken = $oidc->getIdToken();
                
                $user = User::whereIn('email', [$userInfo->email, $userInfo->alternate_email])->first();

                if(!$user){
                    return redirect('/auth');
                }
                
                Auth::login($user);
                return redirect()->route('/');
            }
            catch (OpenIDConnectClientException $e) {
                Auth::logout();
                Session::flush();
                Session::save();
                
                return redirect('error');
            }
        }
        else{
            return view('index');
        }
    }

    public function logout(){
        try{
            $redirect = env('OPENID_REDIRECT_URI');
            if (Session::has('id_token')) {
                $accessToken = Session::get('id_token');
                Session::forget('id_token');
                Session::save();

                $provider = env('OIDC_PROVIDER_URL');
                $clientId = env('OIDC_CLIENT_ID');
                $clientSecret = env('OIDC_CLIENT_SECRET');

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