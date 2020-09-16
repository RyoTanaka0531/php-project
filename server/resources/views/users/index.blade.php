@extends('layouts/app')
@section('title', 'ユーザー一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ユーザー一覧</h2>
        @if (session('err_msg'))
        <p class="text-danger">
            {{session('err_msg')}}
        </p>
        @endif
        <table class="table table-striped">
            <tr>
                <th>名前</th>
                <th>メールアドレス</th>
                <th>プロフィール</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <!-- 配列$usersから取り出した各データ$userに対して、アロー演算子で各プロパティ
                    を取り出している。 -->
                <td><a href="/users/{{$user->id}}">{{$user->name}}</a></td>
                <td>{{$user -> email}}</td>
                <td>{{$user -> profile}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection