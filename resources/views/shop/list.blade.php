@extends('layouts/app')
@section('title', '店舗一覧')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>店舗一覧</h2>
        <table class="table table-striped">
            <tr>
                <th>店舗名</th>
                <th>住所</th>
                <th>ジャンル</th>
                <th></th>
            </tr>
            <tr>
                <td>居酒屋</td>
                <td>東京都渋谷区</td>
                <td>居酒屋</td>
                <td></td>
            </tr>
        </table>
</div>
@endsection