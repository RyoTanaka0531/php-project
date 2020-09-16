@extends('layouts/app')
@section('title', '店舗一覧')
@section('content')

@if (session('flash_message'))
    <div class="flash_message bg-success text-center py-3 my-0">
        {{session('flash_message')}}
    </div>
@endif
<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h2>店舗一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>店舗名</th>
                <th>郵便番号</th>
                <th>住所</th>
                <th>説明</th>
                <th>メニュー</th>
                <th>電話番号</th>
            </tr>
            @foreach($shops as $shop)
            <tr>
                <td><a href="/shops/{{$shop->id}}">{{$shop->name}}</a></td>
                <td>{{$shop->postcode}}</td>
                <td>{{$shop->address}}</td>
                <td>{{$shop->description}}</td>
                <td>{{$shop->menu}}</td>
                <td>{{$shop->tel}}</td>
            </tr>
            @endforeach
        </table>
</div>
<script>
function checkDelete(){
if(window.confirm('削除してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection