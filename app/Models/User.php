<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    public $timestamps=false;
    protected $primaryKey = 'no';

    // Acessor  : berguna untuk mengubah data sebelum di tampilkan dalam laravel
    // jadi data di db gak berubah

    public function getNameAttribute($value){
        return ucfirst($value); //fungsi biar huruf pertama upper case
    } 

    //Mutator : data yang di input bakal sedikit keubah
    // contoh nama, misal input Airu, nanti ke save di db jadi Mr. Airu
    // Mirip setter di android

    public function setNameAttribute($value){
        $this->attributes["name"] = "Mr ".$value;
    }

    public function job(){
        return $this->hasOne("app\models\job","id", "jobid");
    }


}
