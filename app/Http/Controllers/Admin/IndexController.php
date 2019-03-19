<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){

        $user = User::where('id', Auth::user()->id)->first();
        if($user->user_status_id == 3 || empty($user->user_status_id)){
            return redirect('profile/' . $user->id);
        }
        return view('admin.index');
    }

    public function products(){

        return view('admin.products');
    }

    public function companies(){

        return view('admin.companies');
    }

    public function categories(){

        $categories = Category::all();

        return view('admin.categories', [
            'categories' => $categories
        ]);
    }

    public function spareParts(){

        return view('admin.spare_parts');
    }

    public function register(){
        return view('admin.register');
    }


}
