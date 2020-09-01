<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Cart\ProductInCart;

class CartController extends Controller
{
    public function offer(Request $request){

        $offer = ProductInCart::addCartProduct();
        dd($request);


    }
}
