<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        return view("user", [
            "data"=>["Airu", "teteh"],
            "nama"=>"airu"
        ]);
    }
}
