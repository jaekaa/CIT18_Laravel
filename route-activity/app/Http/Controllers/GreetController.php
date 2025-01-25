<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greetShow()
    {
        return view('greet'); 
    }
}