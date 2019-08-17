<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $fillable = ['user_id', 'new_id', 'rating_number', 'rating_content'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function new()
    {
        return $this->belongsTo(News::class, 'new_id');
    }
}
