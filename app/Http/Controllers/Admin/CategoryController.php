<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Translit\Translit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function addCategory(Request $request){

        $category = $this->validate(request(),[
//            "short_name" => "required",
            "name" => "required",
        ]);

        $translit = new Translit();
        $category['short_name'] = $translit->translit($category['name']);

        if($category){
            Category::create($category);
            return response()->json([
                "short_name" => $category['short_name'],
                "name" => $category['name'],
                "id" => $category['id'],
            ]);
        }
    }

    public function editCategory(){

    }

    public function updateCategory(Request $request, $id){

        $category = Category::find($id);

        $this->validate(request(), [
            "name" => "required",
        ]);

        $translit = new Translit();
        $short_name = $translit->translit($request->get('name'));

        $category->short_name = $short_name;
        $category->name = $request->get('name');

        $category->save();

//        return response()->json([
//            "short_name" => $category['short_name'],
//            "name" => $category['name'],
//            "id" => $category['id'],
//        ]);

        return back();
    }
}
