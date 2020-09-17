@extends('layouts/app')
@section('title', 'マイページ')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{Auth::user() -> name}}</h2>
        <span>名前:{{Auth::user() -> name}}</span>
        <p>メールアドレス:{{Auth::user() -> email}}</p>
        <p> プロフィール:{{Auth::user() -> profile}}</p><br>
        <button type="button" class="btn btn-primary" onclick="location.href='/users/{{$user->id}}/edit'">編集</button>
        <form action="/users/{id}/delete" method="post" onSubmit="return checkSubmit()">
            @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <input type="submit" value="退会する" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection