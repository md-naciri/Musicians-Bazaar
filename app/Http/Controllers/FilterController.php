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



        // $articlePrice = Instrument::where('category_id', $catSlag->id)
        // ->when($request->minPrice, function($query, $minPrice){
        //     return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
        // })
        // ->when($request->maxPrice, function($query, $maxPrice){
        //     return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
        // })
        // ->orderByDesc('id')->get();

        $articlePrice = Instrument::where('category_id', $catSlag->id);
        // Add the min-max range conditions based on slider values
        if ($request->has('minPrice') && $request->has('maxPrice')) {
            $minPrice = (float)$request->minPrice;
            $maxPrice = (float)$request->maxPrice;
            // Ensure that the minPrice is always less than or equal to maxPrice
            if ($minPrice <= $maxPrice) {
                $articlePrice->whereRaw("CAST(price AS float) BETWEEN ? AND ?", [$minPrice, $maxPrice]);
            }
        }
        // Continue with the rest of the query
        $articlePrice = $articlePrice->orderByDesc('id')->get();




        $articles = $catSlag->articles()->orderByDesc('id')->get();
        $articleSubcat = $catSlag->articles->unique('subcategory_id');

        $articles = $request->minPrice || $request->maxPrice ? $articlePrice : $articles;

        return view('article.category', ['articles' => $articles, 'articleSubcats' => $articleSubcat]);
    }


    public function articleBySubcat(Request $request, Category $catSlag, Subcategory $subcatSlug)
    {
        $articlePrice = Instrument::where('subcategory_id', $subcatSlug->id)
            ->when($request->minPrice, function ($query, $minPrice) {
                return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
            })
            ->when($request->maxPrice, function ($query, $maxPrice) {
                return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
            })
            ->orderByDesc('id')->get();

        $articles = $subcatSlug->articles()->orderByDesc('id')->get();
        $articleSubcat = $catSlag->articles->unique('subcategory_id');

        $articles = $request->minPrice || $request->maxPrice ? $articlePrice : $articles;

        return view('article.subcategory', ['articles' => $articles, 'articleSubcats' => $articleSubcat]);
    }
}
