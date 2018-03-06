<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Admin;
use Auth;
use Validator;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
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

        $user = Admin::where('email', $request->email)->first();
        if(is_null($user)){
            return response('user not found');
        }

        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $request->remember)){
            return response('authenticated');
        } else {
            return response('authentication error');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
