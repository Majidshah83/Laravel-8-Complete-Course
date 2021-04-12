<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Viewcontroller extends Controller
{
    function view($name){
        return view('User',['users'=>$name]); //call view through cotroller
    }
}
