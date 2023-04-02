<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showUsers()
    {
        $users = User::all();
        return view('admin-dash.admin.users', compact('users'));
    }


    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
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
        return redirect()->route('users.index')->with('message', 'User deleted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ad)
    {
        $inst = Instrument::find($ad);
        unlink(public_path('img/inst_ads/' . $inst->image1));
        if ($inst->image2) {
            unlink(public_path('img/inst_ads/' . $inst->image2));
        }
        if ($inst->image3) {
            unlink(public_path('img/inst_ads/' . $inst->image3));
        }
        Instrument::destroy($ad);
        return redirect()->route('dashboard')->with('message', 'advertisement deleted successfully');
    }
}
