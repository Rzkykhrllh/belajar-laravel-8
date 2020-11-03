<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class user_API extends Controller
{
    public function index(){
        $collection =  Http::get("https://reqres.in/api/users?page=1");
        return view("UserAPI", ["collection" => $collection["data"] ]);
    }
}
