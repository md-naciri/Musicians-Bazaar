<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchArticle(Request $request){
        if($request->search){
            if($request->minPrice || $request->maxPrice){
                $searchArticle = Instrument::where('title','LIKE','%'.$request->search.'%')
                ->when($request->minPrice, function($query, $minPrice){
                    return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
                })
                ->when($request->maxPrice, function($query, $maxPrice){
                    return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
                })
                ->latest()->paginate(1);
            }
            else{
                $searchArticle = Instrument::where('title','LIKE','%'.$request->search.'%')->latest()->paginate(1);
            }
            return view('article.search',['searchArticle'=>$searchArticle]);
        }
        else{
            redirect()->back()->with('message', 'We\'re sorry, there is no product with that name');
        }
    }
}


