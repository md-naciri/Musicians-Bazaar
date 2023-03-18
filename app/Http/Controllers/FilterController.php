<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instrument;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function articleByCat(Request $request, Category $catSlag)
    {
        // $articlePrice = Instrument::where('category_id',$catSlag->id)->when($request->minPrice, function($query, $minPrice){
        //     return $query->where('price','>=',$minPrice);
        // })->when($request->maxPrice, function($query, $maxPrice){
        //     return $query->where('price','<=',$maxPrice);
        // })->get();

        $articlePrice = Instrument::where('category_id', $catSlag->id)
        ->when($request->minPrice, function($query, $minPrice){
            return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
        })
        ->when($request->maxPrice, function($query, $maxPrice){
            return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
        })
        ->get();

        $articles = $catSlag->articles;
        $articleSubcat = $catSlag->articles->unique('subcategory_id');

        $articles = $request->minPrice || $request->maxPrice ? $articlePrice : $articles;

        return view('article.category', ['articles'=>$articles, 'articleSubcats'=>$articleSubcat]);
    }


    public function articleBySubcat(Request $request, Category $catSlag, Subcategory $subcatSlug)
    {
        $articlePrice = Instrument::where('subcategory_id', $subcatSlug->id)
        ->when($request->minPrice, function($query, $minPrice){
            return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
        })
        ->when($request->maxPrice, function($query, $maxPrice){
            return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
        })
        ->get();

        $articles = $subcatSlug->articles;
        $articleSubcat = $catSlag->articles->unique('subcategory_id');

        $articles = $request->minPrice || $request->maxPrice ? $articlePrice : $articles;

        return view('article.subcategory', ['articles'=>$articles, 'articleSubcats'=>$articleSubcat]);
    }

}
