<?php

namespace App\Http\Controllers;

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
}
