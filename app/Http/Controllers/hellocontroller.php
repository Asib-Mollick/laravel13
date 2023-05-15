<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hellocontroller extends Controller
{
    function hello(){
        return "Hello World" ;
    }
    function name(){
        return view('name');
    }

}
