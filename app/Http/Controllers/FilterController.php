<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function articleByCat(Category $catSlag)
    {
        $articles = $catSlag->articles;
        return view('article.category', ['articles'=>$articles]);
    }

    // public function articleBySubcat($catSlag,Subcategory $subcatSlug)
    // {
    //     $articles = $subcatSlug->articles;
    //     return view('article.subcategory', ['articles'=>$articles]);
    // }
}
