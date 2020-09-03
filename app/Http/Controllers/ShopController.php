<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * ショップ一覧を表示する。
     * @return view
     */
    public function showList()
    {
        $shops = Shop::all();
        // dd($shops);
        return view('shop.list', ['shops' => $shops]);
    }

    /**
     * ショップ登録画面表示する。
     * @return view
     */
    public function create()
    {
        return view('shop.create');
    }
}
