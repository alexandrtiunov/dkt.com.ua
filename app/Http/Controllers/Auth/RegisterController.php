<?php

namespace App\Http\Controllers\Auth;

use App\Company;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/';

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
//           Данные пользователя
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
//           Данные компании
//            'comp_name' => ['required', 'string', 'min:8', 'confirmed'],
//            'adress_u' => ['required', 'string', 'min:8', 'confirmed'],
//            'adress_f' => ['required', 'string', 'min:8', 'confirmed'],
//            'city' => ['required', 'string', 'min:8', 'confirmed'],
//            'zip' => ['required', 'string', 'min:8', 'confirmed'],
//            'country' => ['required', 'string', 'min:8', 'confirmed'],
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
                    'first_name' => $data['first_name'],
                    'last_name' => $data['last_name'],
                    'phone' => $data['phone'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);
    }

//    protected function createCompany(array $data){
//
//        $company = [
//            'comp_name' => $data['comp_name'],
//            'adress_u' => $data['adress_u'],
//            'adress_f' => $data['adress_f'],
//            'city' => $data['city'],
//            'zip' => $data['zip'],
//            'country' => $data['country'],
//        ];
//
//        $company['user_id'] = 1;
//
//        if($company){
//            Company::create($company);
//        }
//        return true;
//    }
}
