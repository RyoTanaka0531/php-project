<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // ddとはLaravelのデバッグメソッド。
        // dd($users);
        return view('user.index', ['users' => $users]);
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
}
