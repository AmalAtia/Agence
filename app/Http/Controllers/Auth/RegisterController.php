<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = 'client.dashborad';

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
            'name' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'num' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'is_Admin' => '',
            'is_client' => '',
            'is_agent' => '',
            'is_agent2' => '',
            

        ],
    [

        'name.required'=>'nom obligatoire',
        'adresse.required'=>'adresse obligatoire',
        'num.required'=>'numero téléphonique obligatoire',
        'email.required'=>'email obligatoire',
        'password.required'=>'password obligatoire',
    ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'adresse' => $data['adresse'],
            'num_tel' => $data['num'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_Admin' => '0',
            'is_client' => '1',
            'is_agent' => '0',
            'is_agent2' => '0',
        ]);
    }
}
