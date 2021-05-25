<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashcontroller extends Controller
{
    //flash session  controller
    public function store(Request $req){
        $data1=$req->input('user');
        $data2=$req->input('useremail');
        $data3=$req->input('userpassword');
        $req->session()->flash('user',$data1);
         $req->session()->flash('usermail',$data2);
         $req->session()->flash('userpassword',$data3);
        return redirect('flashc'); // this storeuser path of flashview
    }

}
