@extends('layouts/app')
@section('title', '店舗詳細')
@section('content')
<h2>{{$shop->name}}</h2><br>
<table>
    <tr>
        <th>店舗名</th>
        <th>郵便番号</th>
        <th>住所</th>
        <th>店舗情報</th>
        <th>メニュー</th>
        <th>営業時間</th>
        <th>電話番号</th>
    </tr>
    <tr>
        <td>{{$shop->name}}</td>
        <td>{{$shop->address}}</td>
        <td></td>
        <td>{{$shop->description}}</td>
        <td>{{$shop->menu}}</td>
        <td>{{$shop->time}}</td>
        <td>{{$shop->tel}}</td>
    </tr>
</table>


@endsection