<?php

namespace App;

use App\Models\Chat;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const STATUS_PUBLIC = 1;
    const STATUS_PRIVATE = 0;
    protected $status = [
        1 => [
            'name' => 'Kích hoạt',
            'class' => 'label-success',
        ],
        0 => [
            'name' => 'Khóa tài khoản',
            'class' => 'label-danger'
        ]
    ];

    public function getStatus()
    {
        return array_get($this->status, $this->user_active, '[N\A]');
    }

    public function chat() {
        return $this->hasMany(Chat::class);
    }
}
