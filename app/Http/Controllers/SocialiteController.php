<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookBack()
    {
        
        try {
            $user = Socialite::driver('facebook')->user();
            $member = User::where('fb_id', $user->id)->first();
            if ($member) {
                Auth::login($member);
                return redirect('/');
            } else {
                $email = $user->email ?? 'user' . $user->id . '@example.com';
                $password = Str::random(12); // Generate a random 12-character password
                $hashedPassword = Hash::make($password); // Hash the password before storing it in the database
                $register = User::create([
                    'name' => $user->name,
                    'email' => $email,
                    'fb_id' => $user->id,
                    'password' => $hashedPassword
                ]);
                Auth::login($register);
                return redirect('/');
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
