<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginLogoutController extends Controller
{
    public function userLogin(Request $req){
        $data = $req->input();

        //menyimpan data username ke map "session"
        $req->session()->put("username", $data["username"]);

        return redirect("profile");

    }
}
