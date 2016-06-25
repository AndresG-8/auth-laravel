<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Chat extends Model
{
    protected $table = 'chats';

    protected $fillable = ['user_id','message'];

    public static function Chats(){
        return DB::table('chats')
            ->join('users','chats.user_id','=','users.id')
            ->select('chats.message', 'chats.created_at', 'users.name')
            ->orderBy('chats.id', 'asc')
            ->get();
    }
      
}    