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
use App\Http\Controllers\uploadFileCon;

// Route::get("/", [test2Controller::Class, "Index"]);

// Route::get('/test', [testController::Class,"index"]);
// Route::get('/user', [UserController::Class,"index"]);

// Route::view('/about', "about");
// Route::view('/UnderAge', "UnderAge");

// Route::post("/masuk", [LoginController::class, "getData"]);
// // Route::view("/login","login")
// //     ->middleware("HalamanDewasa");



//belajar database (fetch, add delete)
Route::get('/ListUser', [belajarDB::class, "getUser"]);
route::post('/adduser', [belajarDB::class, "addUser"]);
Route::view("/adduser", "belajarDB.addUser");

route::get('/deleteUser/{name}', [belajarDB::class, "deleteUser"]); //delete ternyata bisa make get, karna di view gak make form action
route::get('/editUser/{name}', [belajarDB::class, "editUser"]);
route::get('/updateUser/{name}', [belajarDB::class, "updateUser"]);
Route::get('/AmbilPeliharaan', [belajarDB::class, "getPeliharaan"]);
Route::get('/querybuilder', [belajarDB::class, "get_directly"]);
Route::get('/querybuilder', [belajarDB::class, "get_count"]);
Route::get('/accessor', [belajarDB::class, "accessor"]);
Route::get('/mutator', [belajarDB::class, "mutator"]);
Route::get('/relasi', [belajarDB::class, "relasi"]);
Route::get('/doubledb', [belajarDB::class, "doubledb"]);

Route::get('/routebinding1/{key}', [belajarDB::class, "default_route_binding"]); //routebinding
Route::get('/routebinding2/{key:name}', [belajarDB::class, "randomkey_route_binding"]); //routebinding


Route::get('/operasistring', [belajarDB::class, "string"]);



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
// route::view("/email", "flash_session.home");
// route::post("/send", [flashSession::class, "send"]);


// // Upload File
// route::view("/upload", "uplaod_page.upload");
// route::post("/upload", [uploadFileCon::class, "index"]);




