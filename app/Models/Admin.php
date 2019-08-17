<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'admin_id';
    protected $fillable = ['admin_name', 'admin_email', 'admin_password', 'admin_fullname', 'admin_phone', 'admin_blocked', 'admin_last_session'];
    protected $hidden = [
        'admin_password',
    ];
}
