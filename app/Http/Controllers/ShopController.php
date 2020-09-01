<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * ショップ一覧を表示する。
     * @return view
     */
    public function showList()
    {
        return view('shop.list');
    }
}
