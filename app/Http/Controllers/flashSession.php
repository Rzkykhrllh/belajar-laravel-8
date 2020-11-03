<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class flashSession extends Controller
{
    public function send(Request $req){
        $data = $req->input();

        $req->session()->flash("username", $data["username"]);
        
        return redirect("/email");
    }
}
