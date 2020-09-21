<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $current_date_time = Carbon::now()->toDateTimeString();

        $subscriptionStatus = Subscription::where('user_id', Auth()->user()->id)->where('end_date', '<=', $current_date_time)->where('status', '1')->first();

        if($subscriptionStatus == null):
            return redirect(route('select.subscription'));
        else:

        return view('users.home');

        endif;
    }

    public function startcv()
    {
        return view('users.home');
    }

    public function selectsub()
    {
        return view('selectsub');
    }

    public function processsub($package)
    {
        if($package == 'bronze'):
                $price = 1000 ;
                $duration = 1;
        elseif($package == 'silver'):
            $price = 1500 ;
            $duration = 3;
            elseif($package == 'gold'):
            $price = 2500;
            $duration = 6;
        endif;

        return view('users.initiatepayment', \compact('price', 'package', 'duration') );

    }

    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }


}
