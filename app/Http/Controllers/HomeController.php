<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('home.welcome');
    }

    public function us()
    {
        return view('home.us'); 
    }
}
