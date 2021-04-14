<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\UserController;
  use App\Http\Controllers\Viewcontroller;
  use App\Http\Controllers\Bladecontroller;
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
