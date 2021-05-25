<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    public function getlog(Request $req){
        $data=$req->input('user');
        $req->session()->put('users',$data);
        return redirect('profile');

        // $data=$req->input();
        // $req->session()->put('users',$data['users']);
        // return redirect('profile');
    }
}
