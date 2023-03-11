<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstAdRequest;
use App\Models\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstAdRequest $request)
    {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        $image1 = $request->file('image1');
        $destinationPath = 'img/inst_ads';
        $image1name = Str::uuid() . "." . $image1->getClientOriginalExtension();
        $image1->move($destinationPath, $image1name);
        $data['image1'] = "$image1name";

        if($image2 = $request->file('image2')){
            $destinationPath = 'img/inst_ads';
            $image2name = Str::uuid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $image2name);
            $data['image2'] = "$image2name";
        };

        if($image3 = $request->file('image3')){
            $destinationPath = 'img/inst_ads';
            $image3name = Str::uuid() . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $image3name);
            $data['image3'] = "$image3name";
        };

        $data['slug']=Str::slug($data['title']);

        Instrument::create($data);

        // return redirect()->route('category.index')->with('message','Category created successfully');
        return 'created successfully';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show(Instrument $instrument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function edit(Instrument $instrument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrument $instrument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrument $instrument)
    {
        //
    }
}
