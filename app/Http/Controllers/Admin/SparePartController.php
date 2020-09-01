<?php

namespace App\Http\Controllers\Admin;

use App\SparePart;
use App\Translit\Translit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SparePartController extends Controller
{
    public function addSparePart(Request $request){

        $spareParts = $this->validate(request(),[
            "name" => "required",
        ]);

        $translit =  new Translit();
        $spareParts['short_name'] = $translit->translit($spareParts['name']);

        if($spareParts){
            SparePart::create($spareParts);
//            return response()->json([
//                "short_name" => $spareParts['short_name'],
//                "name" => $spareParts['name'],
//            ]);
            return back();
        }
    }

    public function editCategory(){

    }

//    public function updateCategory(Request $request, $id){
//
//        $category = Category::find($id);
//
//        $this->validate(request(), [
//            "short_name" => "required",
//            "name" => "required",
//        ]);
//
//        $category->short_name = $request->get('short_name');
//        $category->name = $request->get('name');
//
//        $category->save();
//
////        return response()->json([
////            "short_name" => $category['short_name'],
////            "name" => $category['name'],
////            "id" => $category['id'],
////        ]);
//
//        return back();
//    }
}
