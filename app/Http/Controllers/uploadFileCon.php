<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadFileCon extends Controller
{
    public function  index(Request $req){
        return $req->file("nama_file")->store("docs");
    } 
}
