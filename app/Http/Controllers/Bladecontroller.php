<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bladecontroller extends Controller
{
    public function bladeview(){
        $data=['majidshah','adnan','ali','hamad'];
        return view('userblade',["users"=>$data]);
    }
    public function phpinjs(){
    $name=['zahid','amir','saeed','ali'];
    return view('expamle',["data"=>$name]);
    }
}
