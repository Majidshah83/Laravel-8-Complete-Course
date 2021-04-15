<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function save(Request $req){
     return $req->input();
   }
}
