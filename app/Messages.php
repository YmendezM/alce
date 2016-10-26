<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Messages extends Model
{
    protected $table = 'messages';
    protected $fillable = ['id_users', 'id_tipo','id_visibility', 'id_rol', 'message'];
    
      public function user()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
      public function rol()
    {
        return $this->belongsTo('App\Rol', 'id_rol');
    }
     public function message_type()
    {
        return $this->belongsTo('App\Message_Type', 'id_tipo');
    }
     public function visibility()
    {
        return $this->belongsTo('App\Visibility', 'id_visibility');
    }
}
