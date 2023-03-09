<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = Category::paginate(5);
        $categories = Category::All();
        return view('admin-dash.category.index',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dash.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'img/category';
            $categoryImage = Str::uuid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input['image'] = "$categoryImage";
        }
        $input['slug']=Str::slug($input['name']);
        Category::create($input);
        return redirect()->route('category.index')->with('message','Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin-dash.category.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $input = $request->all();
        $input['slug']=Str::slug($input['name']);
        if ($request->hasFile('image')) {
            unlink(public_path('img/category/' . $category->image));
            // Storage::delete($category->image);
            $image = $request->file('image');
            $destinationPath = 'img/category';
            $categoryImage = Str::uuid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $categoryImage);
            $input['image'] = "$categoryImage";
            $category->update($input);
        }
        $category->update(['name'=>$request->name, 'slug'=>$input['slug']]);
        return redirect()->route('category.index')->with('message','Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        unlink(public_path('img/category/' . $category->image));
        Category::destroy($id);
        return redirect()->route('category.index')->with('message','Category deleted successfully');
    }
}
