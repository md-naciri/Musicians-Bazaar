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
        $articleSubcat = $catSlag->articles->unique('subcategory_id');
        return view('article.category', ['articles'=>$articles, 'articleSubcats'=>$articleSubcat]);
    }

    public function articleBySubcat(Category $catSlag, Subcategory $subcatSlug)
    {
        $articles = $subcatSlug->articles;
        $articleSubcat = $catSlag->articles->unique('subcategory_id');
        return view('article.subcategory', ['articles'=>$articles, 'articleSubcats'=>$articleSubcat]);

        // $articles = $subcatSlug->articles;
        // return view('article.subcategory', ['articles'=>$articles]);
    }
}
