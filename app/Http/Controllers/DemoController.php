<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index(){
        return view('home');
    }


    public function index2(){
        return view('maruf');
    }
}
