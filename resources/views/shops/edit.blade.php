@extends('layouts/app')
@section('title', '店舗編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ショップ編集フォーム</h2>
        <form action="{{ route('shops/update') }}" method="POST" onSubmit="return checkSubmit()">
        @csrf
        <input type="hidden" name="id" value="{{$shop->id}}">
            <div class="form-group">
                <label for="name">店名</label>
                <input type="text" name="name" value="{{$shop->name}}" class="form-control">
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" name="address" value="{{$shop->address}}" class="form-control">
                @if ($errors->has('address'))
                    <div class="text-danger">
                        {{$errors->first('address')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">ショップ説明</label><br>
                <input type="text" name="description" value="{{$shop->description}}" class="form-control">
                @if ($errors->has('description'))
                    <div class="text-danger">
                        {{$errors->first('description')}}
                    </div>
                @endif
            </div>
            <div class="form-gropu">
                <label for="time">営業時間</label>
                <input type="text" name="time" value="{{$shop->time}}" class="form-control">
                @if ($errors->has('time'))
                    <div class="text-danger">
                        {{$errors->first('time')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="menu">メニュー</label>
                <input type="text" name="menu" value="{{$shop->menu}}" class="form-control">
                @if ($errors->has('menu'))
                    <div class="text-danger">
                        {{$errors->first('menu')}}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-primary" href="{{route('shops/index')}}">キャンセル</a>
                <button type="submit" class="btn btn-primary">更新</button>
            </div>
        </form>
    </div>
</div>
<script>
function checkSubmit(){
if(window.confirm('送信してよろしいですか？')){
    return true;
} else {
    return false;
}
}
</script>
@endsection