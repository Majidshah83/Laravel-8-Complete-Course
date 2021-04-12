<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bladecontroller extends Controller
{
    public function bladeview(){
        return view('userblade',["users"=>'Majid shah']);
    }
}
