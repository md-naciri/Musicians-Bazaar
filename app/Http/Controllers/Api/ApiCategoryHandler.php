<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class ApiCategoryHandler extends Controller
{
    public function getCategory()
    {
        $category = Category::all();
        return response()->json($category);
    }

    public function getSubcategory(Request $request)
    {
        $subcategory = Subcategory::where('category_id', $request->category_id)->get();
        return response()->json($subcategory);
    }
}