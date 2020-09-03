<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Http\Requests\ShopRequest;

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

    /**
     * ショップの登録をする。
     * @return view
     */
    public function store(ShopRequest $request)
    {
        // dd($inputs = $request -> all());
        // ショップのデータを受け取る。
        $inputs = $request->all();
        // DB::beginTransaction();
        try {
            // ショップ登録
            Shop::create($inputs);
            // DB::commit();
        } catch(\Throwable $e){
            // DB::rollback();
            abort(500);
        }
        // dd($request->all());
        session()-> flash('err_msg', '登録が完了しました。');
        return redirect(route('shops/imdex'));
    }

}
