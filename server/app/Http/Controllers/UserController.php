<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Middleware\RequirePassword;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show','index']]);
    }

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

    // public function edit($id)
    // {
    //     $user = User::find($id);
    //     $this->authorize('update', $user);
    //     if (is_null($user)){
    //         session()-> flash('err_msg', 'データがありません。');
    //         return redirect(route('users/index'));
    //     }
    //     return view('users.edit', compact('user'));
    // }

    public function edit()
    {
        if ($user = Auth::user()){
            return view('users.edit', ['user' => Auth::user()]);
        } else{
            return redirect('user.index');
        }
    }

    public function update(UserRequest $request)
    {
        $inputs = $request->all();
        $user = User::find($inputs['id']);
        unset($inputs['_token']);
        $user->fill([
            'name' => $inputs['name'],
            'profile' => $inputs['profile'],
        ]);
        $user->save();
        session()->flash('err_msg', '更新が完了しました。');
        // id指定でのルート設定を調べる
        return redirect(route('users/index'));
    }

    public function delete(Request $request)
    {
        User::find($request->id)->delete();
        session()->flash('flash_message', '退会手続きが完了しました。ご利用ありがとうございました！');
        return redirect('/');
    }

    public function mypage(Request $request)
    {
        return view('users.mypage', ['user' => Auth::user()]);
    }
}
