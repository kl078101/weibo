<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaicPagesController extends Controller
{
    //

    public function home(){
        return view('static_pages/home');
    }

    public function help(){
        return view('static_pages/help');;
    }

    public function adout(){
        return view('static_pages/adout');;
    }
}
