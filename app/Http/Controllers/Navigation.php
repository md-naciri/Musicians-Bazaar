<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Navigation extends Controller
{
    public function navigation(){
        $navs = Category::with('subcategories')->get();
        return view('index',['navs'=>$navs]);
    }
}
