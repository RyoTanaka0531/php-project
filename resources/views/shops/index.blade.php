@extends('layouts/app')
@section('title', '店舗一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>店舗一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>店舗名</th>
                <th>住所</th>
                <th>説明</th>
                <th>メニュー</th>
                <th>電話番号</th>
                <th></th>
            </tr>
            @foreach($shops as $shop)
            <tr>
                <td>{{$shop->id}}</td>
                <td><a href="/shops/{{$shop->id}}">{{$shop->name}}</a></td>
                <td>{{$shop->address}}</td>
                <td>{{$shop->description}}</td>
                <td>{{$shop->menu}}</td>
                <td>{{$shop->tel}}</td>
                <td><button type="button" class="btn btn-primary" onclick="location.href='/shops/{{$shop->id}}/edit'">編集</button></td>
            </tr>
            @endforeach
        </table>
</div>
@endsection