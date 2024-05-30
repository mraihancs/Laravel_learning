<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registration extends Controller
{
    //
    public function index(){
        return view('form');
    }


    public function register(Request $req){
        echo '<pre>';   
        print_r($req->all());
    }
}
