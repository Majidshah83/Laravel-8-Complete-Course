<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
   public function save(Request $req){
       $req->validate([
           'username'=>'required | max:10',
           'userpasswrd'=>'required | min:3'
       ]);
     return $req->input();
   }
  
}
