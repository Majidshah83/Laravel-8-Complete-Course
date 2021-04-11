<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function index(){
        echo "call from controller";
    }
    public function showid($id){
        return $id;
    }
}
