<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs(ContactRequest $request)
    {
        Mail::to('my@email.com')->send(new ContactMail($request->name, $request->email, $request->content));
        return redirect()->route('home-page');
    }
}
