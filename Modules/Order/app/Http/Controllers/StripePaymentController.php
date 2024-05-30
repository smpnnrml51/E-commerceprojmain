<?php
      
namespace Modules\Order\Http\Controllers;
       
use Stripe;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
       
class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('order::stripe');
    }
      
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe(Request $request): RedirectResponse
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
        Stripe\Charge::create ([
                "amount" => intval($request->priceToPay * 100),
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Stripe Test Payment" 
        ]);
                
        return back()->with('success', 'Payment has been successful');
    }
}