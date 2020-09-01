<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\SparePart;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProductController extends Controller
{

    public function index(){

        $title = "Каталог товаров";

        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('catalog', [
                'user' => $user,
                'title' => $title,
            ]);
        }else{
            return view('catalog', [
                'title' => $title,
            ]);
        }


    }

    public function catalog($categoryName = null){

        if($categoryName != null){
            $category = Category::where('short_name', $categoryName)->first();

            if($category){
                $products = Product::where('category_id', $category->id)->get();
                $title = $category->name;

                if(isset(Auth::user()->id)){
                    $user = User::find(Auth::user()->id);
                    return view('catalog', [
                        'user' => $user,
                        'products' => $products,
                        'title' => $title,
                        'categoryName' => $title,
                    ]);
                }else{
                    return view('catalog', [
                        'products' => $products,
                        'categoryName' => $title,
                        'title' => $title,
                    ]);
                }
            }else{
                $sparePart = SparePart::where('short_name', $categoryName)->first();
                $products = Product::where('spt_id', $sparePart->id)->get();
                $title = $sparePart->name;

                if(isset(Auth::user()->id)){
                    $user = User::find(Auth::user()->id);
                    return view('catalog', [
                        'user' => $user,
                        'products' => $products,
                        'title' => $title,
                        'categoryName' => $title,
                    ]);
                }else{
                    return view('catalog', [
                        'products' => $products,
                        'title' => $title,
                    ]);
                }
            }
        }
    }

    public function detail($category_short_name, $short_name){

        $product = Product::where('short_name', $short_name)->first();

        $title = 'Купить '  . mb_strtolower($product->name . ' ' . $product->code) . ' в Украине от производителя.';
        $meta = 'В нашем магазине можно заказать ' . mb_strtolower($product->name . ' ' . $product->code) . ' с гарантией от изготовителя и бесплатной доставкой.';

        if(isset(Auth::user()->id)){
            $user = User::find(Auth::user()->id);
            return view('detail', [
                'user' => $user,
                'product' => $product,
                'title' => $title,
                'meta' => $meta,
            ]);
        }else{
            return view('detail', [
                'product' => $product,
                'title' => $title,
                'meta' => $meta,
            ]);
        }
    }
}
