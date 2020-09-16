@extends('layouts/app')
@section('title', 'ショップ登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ショップ登録フォーム</h2>
        <form method="POST" action="{{ route('shops/store') }}" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="name">店名</label>
                <input type="text" name='name' value="{{old('name')}}" class="form-control">
                @error('name')
                    <div class="text-danger">
                        {{ $message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="postcode">郵便番号</label>
                <input type="text" name="postcode" value="{{old('postcode')}}" class="form-control">
                @error('postcode')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="address">住所</label>
                <input type="text" name="address" value="{{old('address')}}" class="form-control">
                @error('address')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">ショップ紹介</label>
                    <input type="text" name="description" value="{{old('description')}}" class="form-control">
                    @error('description')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                    @enderror
            </div>
            <div class="form-group">
                <label for="time">営業時間</label>
                <input type="text" name="time" value="{{old('time')}}" class="form-control">
                @error('time')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="time">メニュー</label>
                <input type="text" name="menu" value="{{old('menu')}}" class="form-control">
                @error('menu')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tel">電話番号</label>
                <input type="text" name="tel" value="{{old('tel')}}" class="form-control">
                @if ($errors->has('tel'))
                    <div class="text-danger">
                        {{$errors->first('tel')}}
                    </div>
                @endif
            </div>
            <div class="mt-5">
                <a class="btn btn-secondary" href="{{ route('shops/index') }}">
                    キャンセル
                </a>
                <button type="submit" class="btn btn-primary">
                    登録する
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