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

    public function list()
    {
        return view('shops.list');
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

    /**
     * ショップの更新をする。
     * @return view
     */
    // Request->ShopRequestに変えることによってvalidationを挟む
    public function update(ShopRequest $request)
    {
        // ショップのデータを受け取る。
        $inputs = $request->all();
        // dd($inputs);
        // ショップを登録
        $shop = Shop::find($inputs['id']);
        $shop->fill([
            'name' => $inputs['name'],
            'postcode' => $inputs['postcode'],
            'address' => $inputs['address'],
            'description' => $inputs['description'],
            'time' => $inputs['time'],
            'tel' => $inputs['tel'],
            'menu' => $inputs['menu']
        ]);
        $shop->save();
        session()-> flash('err_msg', '更新が完了しました。');
        return redirect(route('shops/index'));
    }

    public function delete($id)
    {
        if  (empty($id)){
            session()->flash('err_msg', 'データがありません。');
            return redirect(route('shops/index'));
        }
        try{
            Shop::destroy($id);
        } catch(\Throwable $e){
            abort(500);
        }
        session()->flash('flash_message', '削除が完了しました。');
        return redirect(route('shops/index'));
    }
}
