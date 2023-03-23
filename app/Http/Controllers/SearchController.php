<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchArticle(Request $request){
        $sendedBackArticles = explode(',', $request->input('sendedBackArticles'));
        // dd($sendedBackArticles);












        if($request->search){
            $searchArticle = Instrument::where('title','LIKE','%'.$request->search.'%')->latest()->paginate();
            return view('article.search',['searchArticle'=>$searchArticle]);
        }
        else{
            redirect()->back()->with('message', 'We\'re sorry, there is no product with that name');
        }
    }
}
