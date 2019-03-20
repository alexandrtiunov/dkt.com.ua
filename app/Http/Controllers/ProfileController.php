<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;

class ProfileController extends Controller
{
    public function profile($id){

        $user = User::find($id);
        $company = Company::where('user_id', $id)->first();

        return view('profile', [
            'user' => $user,
            'company' => $company,
        ]);
    }
}
