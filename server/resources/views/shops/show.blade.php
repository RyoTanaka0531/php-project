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
        <td>{{$shop->postcode}}</td>
        <td>{{$shop->address}}</td>
        <td>{{$shop->description}}</td>
        <td>{{$shop->menu}}</td>
        <td>{{$shop->time}}</td>
        <td>{{$shop->tel}}</td>
    </tr>
</table>
<a href="/shops/{{$shop->id}}/edit" class="btn btn-primary">編集</a>
<form action="/shops/delete/{{$shop->id}}" method="post" onSubmit="return checkDelete()">
    @csrf
    <input type="submit" value="削除" class="btn btn-danger">
</form>
@endsection
<script>
    function checkDelete(){
        if(window.confirm('削除してもよろしいですか？')){
            return true;
        } else{
            return false;
        }
    }
</script>