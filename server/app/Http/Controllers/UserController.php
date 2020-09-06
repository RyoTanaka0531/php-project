<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Middleware\RequirePassword;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // ddとはLaravelのデバッグメソッド。
        // dd($users);
        return view('users.index', ['users' => $users]);
    }

    /**
     * ユーザー詳細を表示
     * @param int $id
     * @return view
     */
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user)){
            // session() フラッシュメッセージやエラーメッセージの表示
            session() ->flash('err_msg', 'データがありません。');
            return redirect(route('users/index'));
        }
        return view('users.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (is_null($user)){
            session()-> flash('err_msg', 'データがありません。');
            return redirect(route('users/index'));
        }
        return view('users.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $inputs = $request->all();
        $user = User::find($inputs['id']);
        $user->fill([
            'name' => $inputs['name'],
            'profile' => $inputs['profile']
        ]);
        $user->save();
        session()->flash('err_msg', '更新が完了しました。');
        // id指定でのルート設定を調べる
        return redirect(route('users/show', [$user]));
    }
}
