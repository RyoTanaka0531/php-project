@extends('layouts/app')
@section('title', '詳細')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{$user -> name}}</h2>
        <span>名前:{{$user -> name}}</span>
        <p>メールアドレス:{{$user -> email}}</p>
        <p> プロフィール:{{$user -> profile}}</p>

    </div>
</div>
@endsection