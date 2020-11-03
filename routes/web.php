<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/{id?}', function ($id="bambang") {
//     return "<h1>Ini projek laravel pertama saya $id</h1>";
// })->where('id',"[a-z]*");

use App\Http\Controllers\testController;
use App\Http\Controllers\test2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\belajarDB;
use App\Http\Controllers\user_API;
use App\Http\Controllers\LoginLogoutController;
use App\Http\Controllers\flashSession;

// Route::get("/", [test2Controller::Class, "Index"]);

// Route::get('/test', [testController::Class,"index"]);
// Route::get('/user', [UserController::Class,"index"]);

// Route::view('/about', "about");
// Route::view('/UnderAge', "UnderAge");

// Route::post("/masuk", [LoginController::class, "getData"]);
// // Route::view("/login","login")
// //     ->middleware("HalamanDewasa");



// //belajar database
// Route::get('/AmbilUser', [belajarDB::class, "getUser"]);
// Route::get('/AmbilPeliharaan', [belajarDB::class, "getPeliharaan"]);




// //belajar API
// Route::get("/userAPI", [user_API::Class, "index"]);



//belajar Login-Logout / SimpanData
// route::post("/userAuth", [LoginLogoutController::class, "userLogin"]);
// route::view("/profile", "session.profile");

// Route::get('/login', function(){

//     if (session()->has("username")){ //ngecek apakah ada data yang tersimpan
//         return redirect("profile"); //jika ya, langsung aja ke profile
//     }

//     return view("session.login"); //jika tidak ke halaman login

// });

// Route::get('/logout', function(){

//     if (session()->has("username")){ 
//         session()->pull("username"); //kalau ada data yang tersimpan, dibuang dulu datanya
//     }

//     return redirect("login"); //kembali ke halaman login

// });



// Belajar FLASH SESSION
route::view("/email", "flash_session.home");
route::post("/send", [flashSession::class, "send"]);




