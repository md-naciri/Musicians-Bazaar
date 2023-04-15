<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchArticle(Request $request)
    {
        if ($request->search) {

            if ($request->minPrice || $request->maxPrice) {
                $searchArticle = Instrument::where('title', 'LIKE', '%' . $request->search . '%')
                    ->when($request->minPrice, function ($query, $minPrice) {
                        return $query->whereRaw("CAST(price AS float) >= ?", [(float)$minPrice]);
                    })
                    ->when($request->maxPrice, function ($query, $maxPrice) {
                        return $query->whereRaw("CAST(price AS float) <= ?", [(float)$maxPrice]);
                    })
                    ->orderByRaw('article_status, IF(article_status = 0, promo_time, NULL) DESC, created_at DESC')
                    ->latest()->paginate(10);
            } else {
                // $searchArticle = Instrument::where('title', 'LIKE', '%' . $request->search . '%')
                //     ->orderByRaw('article_status')
                //     ->latest()->paginate(10);
                $searchArticle = Instrument::where('title', 'LIKE', '%' . $request->search . '%')
                    ->orderByRaw('article_status, IF(article_status = 0, promo_time, NULL) DESC, created_at DESC')
                    ->latest()->paginate(10);
            }

            $now = Carbon::now();
            $searchArticle->each(function ($article) use ($now) {
                if ($article->article_status === 0 && $article->promo_time < $now) {
                    $article->update([
                        'article_status' => 1,
                        'promo_time' => NULL,
                    ]);
                }
            });

            return view('article.search', ['searchArticle' => $searchArticle]);
        } else {
            redirect()->back()->with('message', 'We\'re sorry, there is no product with that name');
        }
    }
}
