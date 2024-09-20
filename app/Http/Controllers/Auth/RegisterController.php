<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


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
    protected $redirectTo = '/dashboard';

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
            'full_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'photo'               => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:2024',
            'permit'              => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:2024'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        $request = request();
        $fileName = 'null';
        $permit = 'null';
        if (Input::file('photo')->isValid() && Input::file('permit')->isValid()) {
            $destinationPath = public_path('img/user_profile');
            $extension = Input::file('photo')->getClientOriginalExtension();
            $fileName = uniqid().'.'.$extension;    
            Input::file('photo')->move($destinationPath, $fileName);

            $destinationPath1 = public_path('img/user_profile');
            $extension1 = Input::file('permit')->getClientOriginalExtension();
            $permit = uniqid().'.'.$extension1;    
            Input::file('permit')->move($destinationPath1, $permit);
        }
        return User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'address' => $data['address'],
            'photo' => $fileName,
            'type' => 'hospital',
            'country' => 'af',
            'city' => 'kabul',
            'status' => 0,
            'permit' => $permit
        ]);
    }
}
