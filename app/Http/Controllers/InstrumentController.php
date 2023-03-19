<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstAdRequest;
use App\Http\Requests\UpdateInstAdRequest;
use App\Models\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $myInstruments = Instrument::where('user_id', auth()->user()->id)->get();
        return view('ad.index',['myInstruments'=>$myInstruments]);
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

        return redirect()->route('getMyAds')->with('message','Ad created successfully');
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
    public function edit($id)
    {
        $inst = Instrument::find($id);
        // if(auth()->user()->id === $inst->user_id) // { do this, this is the first method, the second one is Gate }
        $this->authorize('edit_instrument',$inst);
        return view('ad.edit', ['inst'=>$inst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstAdRequest $request, $id)
    {
        $inst = Instrument::findOrFail($id);
        $data = $request->all();
        $data['slug']=Str::slug($data['title']);
        if ($request->hasFile('image1')) {
            unlink(public_path('img/inst_ads/' . $inst->image1));
            $image1 = $request->file('image1');
            $destinationPath = 'img/inst_ads';
            $image1name = Str::uuid() . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $image1name);
            $data['image1'] = "$image1name";
        }
        if ($request->hasFile('image2')) {
            if ($inst->image2) {
                unlink(public_path('img/inst_ads/' . $inst->image2));
            }
            $image2 = $request->file('image2');
            $destinationPath = 'img/inst_ads';
            $image2name = Str::uuid() . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $image2name);
            $data['image2'] = "$image2name";
        }
        if ($request->hasFile('image3')) {
            if ($inst->image3) {
                unlink(public_path('img/inst_ads/' . $inst->image3));
            }
            $image3 = $request->file('image3');
            $destinationPath = 'img/inst_ads';
            $image3name = Str::uuid() . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $image3name);
            $data['image3'] = "$image3name";
        }
        $inst->update($data);
        return redirect()->route('getMyAds')->with('message','advertisement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inst = Instrument::find($id);
        unlink(public_path('img/inst_ads/' . $inst->image1));
        if ($inst->image2) {
            unlink(public_path('img/inst_ads/' . $inst->image2));
        }
        if ($inst->image3) {
            unlink(public_path('img/inst_ads/' . $inst->image3));
        }
        Instrument::destroy($id);
        if(Auth::user()->role==1) return redirect()->route('dashboard')->with('message','advertisement deleted successfully');
        else return redirect()->route('getMyAds')->with('message','advertisement deleted successfully');
    }

    public function articleDisplay($id, $slug){
    // public function articleDisplay(){
        $article = Instrument::where('id', $id)->where('slug', $slug)->firstOrFail();
        return view('article.display',['article'=>$article]);
    }
}
