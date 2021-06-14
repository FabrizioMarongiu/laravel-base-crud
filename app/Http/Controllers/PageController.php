<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //HomePage

    public function index(){

        return view('home');
    }
}
