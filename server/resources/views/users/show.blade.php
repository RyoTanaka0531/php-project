@extends('layouts/app')
@section('title', '詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{$user -> name}}</h2>
        <span>名前:{{$user -> name}}</span>
        <p>メールアドレス:{{$user -> email}}</p>
        <p> プロフィール:{{$user -> profile}}</p><br>
        <button type="button" class="btn btn-primary" onclick="location.href='/users/{{$user->id}}/edit'">編集</button>
        <form action="/users/{id}/delete" method="post" onSubmit="return checkSubmit()">
        @csrf
            <input type="hidden" name="id" value="{{$user->id}}">
            <input type="submit" value="退会する" class="btn btn-danger">
        </form>
    </div>
</div>
@endsection

<script>
    function checkSubmit(){
        if(window.confirm('本当に退会しますか？')){
            return true;
        } else{
            return false;
        }
    }
</script>