<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{

    public function addCategory(Request $request){

        $category = $this->validate(request(),[
            "short_name" => "required",
            "name" => "required",
        ]);

        if($category){
            Category::create($category);
            return response()->json([
                "short_name" => $category['short_name'],
                "name" => $category['name'],
            ]);
        }


    }
}
