<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //テーブル名
    protected $table = 'users';

    // 可変項目
    protected $fillable =
    [
        'name',
        'email',
        'email_verified_at',
        'password',
        'profile',
        'profile_image'
    ];
}
