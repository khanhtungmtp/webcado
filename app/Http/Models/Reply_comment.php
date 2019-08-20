<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply_comment extends Model
{
    protected $table = 'reply_comment';
    protected $primaryKey = 'reply_id';
    protected $fillable = [
        'com_id','reply_content'
    ];
    protected $guarded  = ['*'];

}
