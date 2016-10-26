<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model {

    protected $table = 'rol';
    protected $fillable = ['rolname', 'id_visibility'];
    
    public static function select_rol($id) {
        return rol::where('id_visibility','=',$id)
        ->get();     
    }

}
