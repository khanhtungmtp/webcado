<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chats';
    protected $primaryKey = 'chat_id';
    protected $fillable = ['user_chat_id', 'chat_content'];

    public function user() {
        return $this->belongsTo(UserChat::class, 'user_chat_id');
    }
}
