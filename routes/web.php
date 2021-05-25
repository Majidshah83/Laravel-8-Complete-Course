<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UserController;
  use App\Http\Controllers\Viewcontroller;
  use App\Http\Controllers\Bladecontroller;
  use App\Http\Controllers\FormController;
  use App\Http\Controllers\HttpController;
  use App\Http\Controllers\Methodtest;
  use App\Http\Controllers\Logincontroller;
  use App\Http\Controllers\flashcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('newfile');      // by default we can call view
});
// Route::get("controller",[Usercontroller::class,'index']); Laravel 8 calll function
Route::get('/controller', 'UserController@index');
Route::get('/show/{id}',[Usercontroller::class,'showid']);  //user controller
// Route::view("user","User"); // we can call view  like this
Route::get('/user/{name}', function ($name) {
    return view('user',["users"=>$name]);      // pass data through url in view
});
// Route::get('/user', function () {
//     return view('user');      // by default we can call  userview
// });
// Route::get('user/{name}','Viewcontroller@view'); //call view through cotroller
Route::get('user/{name}',[Viewcontroller::class,'view']);
Route::view("header","Header"); //header  view call
Route::view("about","About"); //about  view call
Route::get("blade",[Bladecontroller::class,'bladeview']);
Route::view("inner","inner");
Route::get("example",[Bladecontroller::class,'phpinjs']);
Route::post("Form",[FormController::class,'save']);  //in double court need same class name action take form Form because Form name a view
Route::view("loginsave","Form");
Route::view("noacess",'noacess');
Route::view("acess",'acess');
Route::view("noacess",'noacess');
Route::view("goroupmidlware",'groupmidlware');
Route::group(['middleware'=>['protectionpage']],function(){         //group middlware
   Route::view("home",'home');
});
route::view("routehome",'Routehome')->middleware('protectedpage');  //route middleware
route::view("routenoacess",'Routenoacess');
Route::get("http",[HttpController::class,'index']);
Route::view("log",'methodview'); //method view
Route::put("test",[Methodtest::class,'testget']);   //Http method
Route::post("logins",[Logincontroller::class,'getlog']);
// Route::view("login1",'login');
Route::view("profile",'Profile');
Route::get('/logout', function () {
    if(session()->has('users')){
        session()->pull('users');
    }
    return redirect('login');
});
Route::get('/login', function () {
    if(session()->has('users')){
     return redirect('profile');
    }
    return view('login');
});
Route::view("flash",'Storeuser');
Route::post("strorflash",[flashcontroller::class,'store']);
Route::view("flashc",'flashview');
