<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class UserProfileController extends Controller
{
    public function index(){
        return view('user-profile.index');
    }

    public function updateUser(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'pic'=>'mimes:png,jpg,jpeg',
        ]);
        $user = User::find(auth()->user()->id);
        if ($image = $request->file('pic')) {
            if ($user->pic) {
                unlink(public_path('img/profile/' . $user->pic));
            }
            $destinationPath = 'img/profile';
            $userImage = Str::uuid() . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $userImage);
            $user->update(['pic'=>$userImage]);
        }
        $user->update([
            'name'=>$request->name,
            'adress'=>$request->adress,
        ]);
        return redirect()->back()->with('message','Profile updated successfully');
        
    }

    public function deleteUser(){
        $user = User::find(auth()->user()->id);
        $instruments = Instrument::where('user_id', $user->id)->get();
        foreach ($instruments as $inst) {
            if ($inst->image1) {
                unlink(public_path('img/inst_ads/' . $inst->image1));
            }
            if ($inst->image2) {
                unlink(public_path('img/inst_ads/' . $inst->image2));
            }
            if ($inst->image3) {
                unlink(public_path('img/inst_ads/' . $inst->image3));
            }
        }
        Instrument::where('user_id', $user->id)->delete();
        $user->delete();
        return redirect('/');
    }
}
