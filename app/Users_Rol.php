<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Rol extends Model
{
    protected $table = 'users_rol';
    protected $fillable = ['id_users', 'id_rol'];
}
