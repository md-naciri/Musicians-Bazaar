<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function showUsers()
    {
        $users = User::all();
        return view('admin-dash.admin.users', compact('users'));
    }


    public function getUsers()
    {
        // $users = User::all();
        // return DataTables::of($users)->make(true);
        $users = User::query();
        return DataTables::of($users)
            ->editColumn('created_at', function($user) {
                return $user->created_at->format('Y-m-d H:i:s');
            })
            ->addColumn('actions', function ($user) {
                return new HtmlString('<form action="' . URL::route('admin.user.destroy', $user->id) . '" method="post">' .
                    csrf_field() .
                    method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm">Delete</button>' .
                    '</form>');
            })
            ->make(true);
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
