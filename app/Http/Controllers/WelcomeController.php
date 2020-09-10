<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notify;

class WelcomeController extends Controller
{
    public function index()
    {

        $description ='';
        $keywords = '';
        $author = '';

        return view('count', compact('keywords'));
    }

    public function notifyme(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'phone_number' => 'required|unique:notifyme',
            'designation' => 'required'
        ]);

        $notifyme = new Notify;
        $notifyme->email = $request->email;
        $notifyme->phone_number = $request->phone_number;
        $notifyme->designation = $request->designation;

        $notifyme->save();

        return redirect()->back()->with('success', 'Thank you for signing up. We will let you know when we go live');

    }

    public function staging()
    {

        $description ='';
        $keywords = '';
        $author = '';

        return view('welcome', compact('keywords'));
    }
}
