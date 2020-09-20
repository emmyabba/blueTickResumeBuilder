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
        dd($current_date_time);
        $isSubscribed = Subscription::where('Auth()->user()->id', 'user_id')->where('expired_at' <= $current_date_time)->get();
        return view('users.home');
    }

    public function startcv()
    {
        return view('users.home');
    }
}
