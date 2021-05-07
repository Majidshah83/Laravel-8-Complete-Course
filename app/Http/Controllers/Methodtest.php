<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Methodtest extends Controller
{
    public function testget(Request $req){
        return $req->input();
    }
}
