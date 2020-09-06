<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //テーブル名を定義
    protected $table = 'shops';

    // 可変項目
    protected $fillable =
    [
        'name',
        'address',
        'description',
        'time',
        'tel',
        'menu'
    ];
}
