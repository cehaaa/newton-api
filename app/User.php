<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'users';
    protected $fillable = ['nisn','nama','kelas','jurusan','alamat','telp','email','password','angkatan','status','aktif'];
    protected $primarykey = 'id';
}
