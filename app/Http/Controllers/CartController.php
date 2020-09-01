<?php

namespace App\Http\Controllers;

use App\Http\Cart\ProductInCart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request){


        return response()->json([
           'name' => $_COOKIE,
        ]);

    }


}
