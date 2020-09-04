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
    public function index()
    {
        $shops = Shop::all();
        // dd($shops);
        return view('shops.index', ['shops' => $shops]);
    }

    /**
     * ショップ詳細を表示
     * @param int $id
     * @return view
     */
    public function show($id)
    {
        $shop = Shop::find($id);
        if (is_null($shop)){
            session()-> flash('err_msg', 'データがありません。');
            return redirect(route('shops/index'));
        }
        return view('shops.show', ['shop' => $shop]);
    }
    /**
     * ショップ登録画面表示する。
     * @return view
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * ショップの登録をする。
     * @return view
     */
    // Request->ShopRequestに変えることによってvalidationを挟む
    public function store(ShopRequest $request)
    {
        // dd($inputs = $request -> all());
        // ショップのデータを受け取る。
        $inputs = $request->all();
        // ショップを登録
        Shop::create($inputs);
        // dd($request->all());
        session()-> flash('err_msg', '登録が完了しました。');
        return redirect(route('shops/index'));
    }

    /**
     * ショップ編集フォームを表示
     * @param int $id
     * @return view
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        if (is_null($shop)){
            session()-> flash('err_msg', 'データがありません');
            return redirect(route('shops/index'));
        }
        return view('shops.edit', compact('shop'));

    }
}
