<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Cart\ProductInCart;

class IndexController extends Controller
{
    public function index(){

        $products = Product::all();

        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('index', [
                'user' => $user,
                'products' => $products,
            ]);
        }else{
            return view('index', [
                'products' => $products,
            ]);
        }
    }

    public function contact(){

        $title = 'Контакты';
        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('contact', [
                'user' => $user,
                'title' => $title,
            ]);
        }else {
            return view('contact', [
                'title' => $title,
            ]);
        }
    }

    public function history(){

        $title = 'О нас';
        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('history', [
                'user' => $user,
                'title' => $title,
            ]);
        }else {
            return view('history', [
                'title' => $title,
            ]);
        }

    }

    public function cart(){

        $productsCart = ProductInCart::addCartProduct();
        $value = 1;

        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('cart', [
                'user' => $user,
                'productsCart' => $productsCart,
                'value' => $value,
            ]);
        }else {
            return view('cart', [
                'productsCart' => $productsCart,
                'value' => $value,
            ]);
        }
    }
}
