<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SebuahModel;

class belajarDB extends Controller
{
    public function getUser(){
        return User::all();
    }

    public function getPeliharaan(){
        return SebuahModel::all();
    }
}
