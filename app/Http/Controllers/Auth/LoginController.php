<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\StafLogin;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function handle(){

    }

    public function login(Request $request) {
        $mobile     = (int) $request->input('mobile');
        $password   = $request->input('password');

        $admin = StafLogin::where('mobile', $mobile)->where('role', 'admin')->first();
        if($admin) {
            if (\Hash::check($password, $admin->password)) {
                \Auth::guard('admin')->login($admin);
            }
            return back()->withErrors([
                'password' => 'The provided credentials do not match our records.',
            ]);
        }
        return back()->withErrors([
            'mobile' => 'The provided credentials do not match our records.',
        ]);
    }

}
