<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;

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
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'userLogout']);
    }

    public function showLoginForm()
    {
        return view('store', [
            'activated' => 'login'
        ]);
    }

    public function userLogout()
    {
        Auth::guard('web')->logout();
        return redirect('/');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        Auth::guard('admin')->logout();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $validator = Validator::make([
            'email' => $request->email,
            'password' => $request->password
        ], [
            'email' => 'required|email',
            'password' => 'required|max:40'
        ]);

        if($validator->fails()){
            return response('validation error', 500);
        }

        $user = User::where('email', $request->email)->first();
        if(is_null($user)){
            return response('user not found');
        }

        if(Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)){
            return response('authenticated');
        } else {
            return response('authentication error');
        }
    }
}
