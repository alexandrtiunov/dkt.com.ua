<?php

namespace App\Http\Controllers\Admin\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(){

        return view('admin.register');
    }

    public function register(Request $request){

        $newUser = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $newCompany = $request->validate([
            'comp_name' => ['required', 'string', 'min:8', 'confirmed'],
            'adress_u' => ['required', 'string', 'min:8', 'confirmed'],
            'adress_f' => ['required', 'string', 'min:8', 'confirmed'],
            'city' => ['required', 'string', 'min:8', 'confirmed'],
            'zip' => ['required', 'string', 'min:8', 'confirmed'],
            'country' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($newUser){
            User::create($newUser);
        }

        $newCompany['user_id'] = 1;

        if ($newCompany){
            User::create($newCompany);

            return back();
        }
    }
}
