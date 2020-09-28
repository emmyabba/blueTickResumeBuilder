<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use Carbon\Carbon;
use Paystack;

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
        $title = Auth()->user()->othernames.' '.Auth()->user()->lastname.' CV by Bluetick';
        $current_date_time = Carbon::now()->toDateTimeString();

        $subscriptionStatus = Subscription::where('user_id', Auth()->user()->id)->where('end_date', '>=', Carbon::now()->toDateString())->first();

        if($subscriptionStatus == null):
            return redirect(route('select.subscription'));
        endif;
        return view('users.home', \compact('title'));
    }



    public function selectsub()
    {
        $title = 'Subscriptions';
        return view('selectsub', \compact('title'));
    }

    public function processsub($package)
    {
        if($package == 'bronze'):
                $price = 1000 ;
                $duration = 1;
                $end_date = Carbon::today()->addDays(30);
        elseif($package == 'silver'):
            $price = 1500 ;
            $duration = 3;
            $end_date = Carbon::today()->addDays(60);
            elseif($package == 'gold'):
            $price = 2500;
            $duration = 6;
            $end_date = Carbon::today()->addDays(90);
        endif;

        $sub = new Subscription;

        $sub->user_id = Auth()->user()->id;
        $sub->package = $package;
        $sub->price = $price;
        $sub->trans_id = mt_rand(1000000000, 9999999999);
        $sub->start_date = Carbon::now()->toDateTimeString();
        $sub->end_date = $end_date;

        $expire_at =  $sub->end_date;
        $trans_id = $sub->trans_id;
        $this_trans = session(['this_trans' => $trans_id]);

        $save = $sub->save();

        return view('users.initiatepayment', \compact('price', 'package', 'duration', 'expire_at', 'trans_id') );

    }

    public function handleGatewayCallback($id)
    {
       $this_trans = session('this_trans');

       $order = Subscription::where('trans_id', $this_trans)->first();
       $order->status = 1;
       $order->paystack_response = $id;
       $order->save();

       return \redirect(route('home'))->with('success', 'Payment completed successfully. Create your CV');



    }

    public function downloadcv(Request $request)
    {
        dd($request);
    }


}



