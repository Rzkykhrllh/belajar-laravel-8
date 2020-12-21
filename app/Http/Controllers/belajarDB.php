<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\customer;
use App\Models\job;
use App\Models\SebuahModel;
use DB;
use Str;

class belajarDB extends Controller
{
    public function getUser(){
        $data =  User::all();

        return view("belajarDB.userList", ["users"=>$data]);
    }

    public function addUser(Request $req){
        
        $user = new User;
        $user->no = -1;
        $user->name = $req->nama;
        $user->city = $req->kota;
        $user->job = $req->pekerjaan;

        $user->save();
    }

    public function deleteUser($name){
        
        $user = User::firstOrFail()->where("name", $name);
        $user->delete();

        return redirect("ListUser");

    }

    public function editUser($name){
        
        $user = User::firstOrFail()->where("name", $name);
        
        return (string) $user;
        
        return view("belajarDB.edit",compact(user));

    }

    public function updateUser(Request $req){
        
        $user = User::firstOrFail()->where("name", $name);
        return view("belajarDB.edit", ["data"=>$user]);

    }

    public function getPeliharaan(){
        return SebuahModel::all();
    }

    public function get_directly(){
        $arr = DB::table('users')->get();
        return $arr;
        
        //inserting using query builder
        // return DB::table('users')->insert(
        //     [
        //         "name"=>"fox",
        //         "city"=>"jarkarta",
        //         "job"=>"weebs",
        //         "no"=>3 
        //     ]
        // );

    }

    public function get_count(){
        return DB::table('users')->count("no");
    }

    public function accessor(){
        return User::all();
    }

    public function mutator(){
        $user =  new User;
        $user->name = "Kawaki";
        $user->job = "Kara Member";
        $user->no = "4";
        $user->city = "Konoha";

        $user->save();

    }

    function doubledb(){
        return customer::all();
    }

    public function default_route_binding(User $key){
        //codeless to get data from db
        //search by primary key
        return $key;
    }

    public function randomkey_route_binding(User $key){
        //codeless to get data from db
        //search by primary key
        return $key;
    }

    public function relasi(){
        return user::all();
    }

    public function string(){
        // melakuka beberapa operasi sekaligus pada string

        $data = "halo semua, gimana boruto chapter 53 ?";

        //traditional way
        // $data = Str::ucfirst($data);
        // $data = Str::replacefirst("Halo","Konijiwa",$data);
        // $data = Str::camel($data);

        //Ez way
        $data = Str::of($data)
                    ->ucfirst($data)
                    ->replacefirst("Halo", "konijiwa", $data)
                    ->camel($data);

        
        return $data;
    }
}
