<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message_Type extends Model
{
     protected $table = 'message_type';
    protected $fillable = ['typename'];
}
