<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Instrument;
use Illuminate\Http\Request;

class Navigation extends Controller
{
    public function navigation(){
        //I userd laravel local scope
        $category1 = Category::CategoryName('Strings and Orchestral Instruments');
        $articles1Slide1 = Instrument::Articles1Slide1($category1->id, 3);
        $articles1Slide2 = Instrument::Articles1Slide2($category1->id, $articles1Slide1);

        $category2 = Category::CategoryName('Guitars and Basses');
        $articles2Slide1 = Instrument::Articles1Slide1($category2->id, 4);
        // $articles2Slide2 = Instrument::Articles1Slide2($category2->id, $articles2Slide1);

        $category3 = Category::CategoryName('Keyboards and Pianos');
        $articles3Slide1 = Instrument::Articles1Slide1($category3->id, 3);

        return view('index',[
            'articles1Slide1'=>$articles1Slide1,
            'articles1Slide2'=>$articles1Slide2, 
            'category1'=>$category1,
            'articles2Slide1'=>$articles2Slide1,
            'category2'=>$category2,
            'articles3Slide1'=>$articles3Slide1,
            'category3'=>$category3
            ]);
    }
}
