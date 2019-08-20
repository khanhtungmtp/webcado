<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserChat extends Model
{
    protected $table = 'user_chats';
    protected $primaryKey = 'user_chat_id';
    protected $fillable = ['chat_name', 'chat_email'];

    public function messages() {
        return $this->hasMany(Chat::class);
    }
}
