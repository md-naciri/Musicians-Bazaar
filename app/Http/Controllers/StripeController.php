<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Carbon\Carbon;
use Illuminate\Http\Request;
// use Stripe;
use Stripe\Stripe;
use Stripe\Charge;

class StripeController extends Controller
{
    public function stripe($id)
    {
        $instrument = Instrument::where('user_id', '=', auth()->user()->id)
            ->where('id', $id)
            ->first();

        if ($instrument) {
            return view('stripe.stripe', ['id' => $id]);
        } else {
            return redirect()->route('getMyAds');
        }

        // return view('stripe.stripe', ['id' => $id]);
    }

    public function stripePost(Request $request)
    {
        $ad = Instrument::findOrFail($request->ad_id);
        Stripe::setApiKey(config('services.stripe.secret'));
        Charge::create([
            'amount' => 100 * 5,
            'currency' => "usd",
            'source' => $request->stripeToken,
            'description' => 'Promote Ad: ' . $ad->title,
        ]);

        $ad->update([
            'article_status' => 0,
            'promo_time' => Carbon::now()->addDays(5) // Set promo_time column to current time plus 5 days
        ]);

        return back()->with('message', 'Payment successfull!');
    }
}
