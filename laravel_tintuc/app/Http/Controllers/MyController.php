<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function __construct()
    {
        @session_start();
    }

    public function home(){
    	return view('back.home');
    }
}