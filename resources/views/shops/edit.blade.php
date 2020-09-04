@extends('layout/app')
@section('title', '店舗編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ショップ編集フォーム</h2>
        <form action="{{route('shops/update)}}" method="post" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="name">店名</label>
                <input type="text" name="name" value='{{$shop->name}}' class="form-control">
                @if ($errors->has('name'))
                    <div ckass="text-dager">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" name="address" id="address" value="{{$shop->address}}" class="form-control">
                @if ($errors->has('address'))
                    <div class="test-danger"
                        {{$errors->first('address')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">ショップ説明</label>
                <input type="text" name="description" id="description" value="{{$shop->description}}" class="form-group">
                @if ($errors->has('description'))
                    <div class="text-danger">
                        {{$errors->first('description')}}
                    </div>
                @endif
            </div>
            <div class="form-gropu">
                <label for="time">営業時間</label>
                <input type="text" name="time" id="time" value="{{$shop->time}}" class="form-control">
                @if ($errors->has('time'))
                    <div class="text-danger">
                        {{$errors->first('time')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="menu">メニュー</label>
                <input type="text" name="menu" id="menu" value="{{$shop->menu}}" class="form-control">
                @if ($errors->has('menu'))
                    <div class="text-danger">
                        {{$errors->first('menu')}}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-primary" href="{{route('shops/index')}}">キャンセル</a>
                <button type="submit" class="btn btn-primary">編集</button>
            </div>
        </form>
    </div>
</div>
@endsection