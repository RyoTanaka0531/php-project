@extends('layouts/app')
@section('title', 'ショップ編集')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ショップ編集フォーム</h2>
        <form action="{{ route('shops/update') }}" method="post" onSubmit="return checkSubmit()">
        @csrf
        <input type="hidden" name="id" value="{{$shop->id}}">
            <div class="form-group">
                <label for="name">店名</label>
                <input type="text" name='name' value="{{$shop->name}}" class="form-control">
                    <!-- id="name" -->
                    <!-- class="form-control" -->
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" name="address" value="{{$shop->address}}" class="form-control">
                    <!-- id="address" -->
                    <!-- class="form-control" -->
                @if ($errors->has('address'))
                    <div class="text-danger">
                        {{ $errors->first('address') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="description">ショップ紹介</label>
                    <input type="text" name="description" value="{{$shop->description}}" class="form-control">
                    @if ($errors ->has('description'))
                        <div class="text-danger">
                            {{$errors->first('description')}}
                        </div>
                    @endif
            </div>
            <div class="form-group">
                <label for="time">営業時間</label>
                <input type="text" name="time" id="time" value="{{$shop->time}}" class="form-control">
                @if ($errors->has('time'))
                    <div class="text-danger">
                        {{$errors->first('time')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="time">メニュー</label>
                <input type="text" name="menu" value="{{$shop->menu}}" class="form-control">
                @if ($errors->has('menu'))
                    <div class="text-danger">
                        {{$errors->first('menu')}}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="text" name="tel" value="{{$shop->tel}}" class="form-control">
                @if ($errors->has('tel'))
                    {{$errors->first('tel')}}
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('shops/index') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    更新する
                </button>
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