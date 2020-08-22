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

        return view('welcome', compact('keywords'));
    }
}
