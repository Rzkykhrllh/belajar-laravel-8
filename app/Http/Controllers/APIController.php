<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class APIController extends Controller
{
    function getdata(){
        return [["nama"=>"Airu"]];  
        // return "test";  
    }

    function adddata(Request $req){

        $user = new User;
        $user->name = $req->name;
        $user->job = $req->job;
        $user->city =  $req->city;
        $user->jobid =  $req->jobid;
        $user->save();

        return [["testing" => "sukses"]];
    }
}
