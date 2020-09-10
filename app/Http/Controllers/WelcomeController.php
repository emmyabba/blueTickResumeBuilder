<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }

    public function staging()
    {

        $description ='';
        $keywords = '';
        $author = '';

        return view('welcome', compact('keywords'));
    }
}
