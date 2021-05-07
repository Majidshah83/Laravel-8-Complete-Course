<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class HttpController extends Controller
{
    public function index(){
      $datas= Http::get("https://reqres.in/api/users?page=1");
      return view('Httpview',['collection'=>$datas['data']]);
    }
}
