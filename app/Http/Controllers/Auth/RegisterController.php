<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:40',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:5|max:40',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        return view('store', [
            'activated' => 'register'
        ]);
    }

    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!is_null($user)){
            return response('user already exists');
        }

        $this->validator([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ])->validate();

        event(new Registered($user = $this->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ])));

        $this->guard()->login($user);

        $user = User::where('email', $request->email)->first();
        if(!is_null($user)){
            return response('registered');
        } else {
            return response('internal server error', 500);
        }
    }
}
