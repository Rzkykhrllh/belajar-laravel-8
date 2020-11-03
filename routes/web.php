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

Route::get("/", [test2Controller::Class, "Index"]);

Route::get('/test', [testController::Class,"index"]);
Route::get('/user', [UserController::Class,"index"]);

Route::view('/about', "about");
Route::view('/UnderAge', "UnderAge");

Route::post("/masuk", [LoginController::class, "getData"]);
Route::view("/login","login")
    ->middleware("HalamanDewasa");


//belajar database
Route::get('/AmbilUser', [belajarDB::class, "getUser"]);
Route::get('/AmbilPeliharaan', [belajarDB::class, "getPeliharaan"]);

//belajar API
Route::get("/userAPI", [user_API::Class, "index"]);


