<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function addCategory(Request $request){

        $category = $request->validate([
            "url" => "required",
            "name" => "required",
        ]);

        dd($category);


    }
}
