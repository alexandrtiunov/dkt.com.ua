<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use App\Resource;
use App\SparePart;
use App\User;
use App\UserStatus;
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

        $products = Product::all();
        $categories = Category::all();
        $spareParts = SparePart::all();

        return view('admin.index', [
            'products' => $products,
            'categories' => $categories,
            'spareParts' => $spareParts,
        ]);
    }

    public function products(){

        $products = Product::all();
        $categories = Category::all();
        $spareParts = SparePart::all();
        $resources = Resource::all();

        return view('admin.products', [
            'products' => $products,
            'categories' => $categories,
            'spareParts' => $spareParts,
            'resources' => $resources,
        ]);
    }

    public function companies(){

        $products = Product::all();
        $categories = Category::all();
        $spareParts = SparePart::all();

        return view('admin.companies', [
            'products' => $products,
            'categories' => $categories,
            'spareParts' => $spareParts,
        ]);
    }

    public function categories(){

        $spareParts = SparePart::all();
        $categories = Category::all();

        return view('admin.categories', [
            'categories' => $categories,
            'spareParts' => $spareParts,
        ]);
    }

    public function spareParts(){

        $spareParts = SparePart::all();
        $categories = Category::all();

        return view('admin.spare_parts', [
            'spareParts' => $spareParts,
            'categories' => $categories,
        ]);
    }

    public function register(){

        $users = User::where('user_status_id', null)->get();

        $spareParts = SparePart::all();
        $categories = Category::all();
        $userStatus = UserStatus::all();

        return view('admin.add_new_user', [
            'users' => $users,
            'spareParts' => $spareParts,
            'categories' => $categories,
            'userStatus' => $userStatus,
        ]);
    }


}
