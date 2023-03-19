<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instrument;
use Illuminate\Http\Request;

class Navigation extends Controller
{
    public function navigation(){
        $category1 = Category::where('id',1)->first('slug');
        $articles1Slide1 = Instrument::where('category_id',1)->orderByDesc('id')->take(4)->get();
        $articles1Slide2 = Instrument::where('category_id',1)->whereNotIn('id',$articles1Slide1->pluck('id')->toArray())->orderByDesc('id')->take(4)->get();
        // $navs = Category::with('subcategories')->get();
        // return view('index',['navs'=>$navs]);
        return view('index',['articles1Slide1'=>$articles1Slide1,'articles1Slide2'=>$articles1Slide2, 'category1'=>$category1]);
    }
}
