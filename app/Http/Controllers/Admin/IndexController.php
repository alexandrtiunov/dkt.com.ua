<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){

        return view('admin.index');
    }

    public function products(){

        return view('admin.products');
    }

    public function companies(){

        return view('admin.companies');
    }

    public function categories(){

        return view('admin.categories');
    }

    public function spareParts(){

        return view('admin.spare_parts');
    }


}
