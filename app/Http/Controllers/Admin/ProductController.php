<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Translit\Translit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public $translit;

    public function addProduct(Request $request){

        $product = $this->validate(request(),[
            // 'code', 'name', 'price', 'category_id', 'spt_id', 'status', 'quantity', 'user_id', 'short_name',
            //'activity'
            "code" => "required",
            "name" => "required",
            "price" => "required",
            "category_id" => "required",
            "spt_id" => "required",
            "status" => "required",
            "quantity" => "required",
        ]);

        $product['user_id'] = Auth::user()->id;

        $translit = new Translit();
        $shortName = $translit->translit($product['name']);

        $product['short_name'] =  $shortName . '_' .  $product['code'];

        if($product){
            Product::create($product);
//            return response()->json([
//                "short_name" => $product['short_name'],
//                "name" => $product['name'],
//                "id" => $product['id'],
//            ]);
            return back();
        }
    }

    public function editProduct(){

    }

    public function updateProduct(Request $request, $id){

        $product = Product::find($id);
        $this->validate(request(), [
            "code" => "required",
            "name" => "required",
            "price" => "required",
            "category_id" => "required",
            "spt_id" => "required",
            "status" => "required",
            "quantity" => "required",
        ]);

        $product['user_id'] = Auth::user()->id;

        $translit = new Translit();
        $shortName = $translit->translit($request->get('name'));

        if($request->get('name') != $product['name']){
            $product['short_name'] =  $shortName . '_' .  $product['code'];
        }
        if($request->get('code') != $product['code']){
            $product['short_name'] =  $shortName . '_' .  $request->get('code');
        }

        $product->code = $request->get('code');
        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->category_id = $request->get('category_id');
        $product->spt_id = $request->get('spt_id');
        $product->status = $request->get('status');
        $product->quantity = $request->get('quantity');
        $product->short_name = $product['short_name'];

//        dd($product);

        $product->save();

        return back()->with('success', 'Товар обновлен');



    }

}
