<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;
// use Stripe;
use Stripe\Stripe;
use Stripe\Charge;

class StripeController extends Controller
{
    public function stripe($id)
    {
        $id = $id;
        return view('stripe.stripe',['id'=>$id]);
    }

    public function stripePost(Request $request)
    {
        $ad = Instrument::findOrFail($request->ad_id);
        Stripe::setApiKey(config('services.stripe.secret'));
        Charge::create([
            'amount'=>100*5,
            'currency'=>"usd",
            'source'=>$request->stripeToken,
            'description'=>'Promote Ad: ' . $ad->title,
        ]);

        $ad->update(['article_status' => 0]);

        return back()->with('message','Payment successfull!');

    }
}
