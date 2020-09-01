<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Label\LabelCreate;

class ShipmentController extends Controller
{
    public function store(Request $request){

        $products = [];
        $w = [];

        foreach ($_POST['product'] as $item){

            $w[$item] = [
                "product_id" => $item,
            ];

            $w[$item] += [
                "quantity" => current($_POST['quantity']),
            ];

            $w[$item] += [
                    "quantity" => next($_POST['quantity']),
            ];

            $findProducts = Product::find($item);

            array_push($products, $findProducts);

        }

        foreach ($products as $product){

            $name = $product['name'];
            $code = $product['code'];

            $path = public_path() . '/birki/';

            $label = new LabelCreate();

            $label->create($path, $name, $code);



        }

        return back()->with('success', 'Бирка создана');
    }
}
