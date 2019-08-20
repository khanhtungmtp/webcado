<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $primaryKey = 'comment_id';
    protected $fillable = [
        'comment_author_email','comment_content'
    ];
    protected $guarded  = ['*'];

}
