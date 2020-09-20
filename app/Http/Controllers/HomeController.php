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
            return redirect(route('initiate.payment'));
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
        $email = Auth()->user()->email;

        if($package == 'bronze'):
                $price = 1000 * 100;
        elseif($package == 'bronze'):
            $price = 1500 * 100;
        else:
            $price = 2500 * 100;
        endif;

        return view('users.initiatepayment', );

    }

    public function initiatepay()
    {
        return view('users.home');
    }
}
