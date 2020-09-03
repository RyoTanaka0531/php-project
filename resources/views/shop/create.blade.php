@extends('layouts/app')
@section('title', 'ショップ登録')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>ショップ登録フォーム</h2>
        <form method="POST" action="{{ route('shops/store') }}" onSubmit="return checkSubmit()">
        @csrf
            <div class="form-group">
                <label for="name">
                    店名
                </label>
                <input type="text" name='name' id="name" class="form-control">
                    <!-- id="name" -->
                    <!-- name="name" -->
                    <!-- class="form-control" -->
                    <!-- value="{{ old('name') }}" -->
                    <!-- type="text" -->
                @if ($errors->has('name'))
                    <div class="text-danger">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
                <label for="address">
                    住所
                </label>
                <input type="text" name="address" id="address" class="form-control">
                    <!-- id="address" -->
                    <!-- name="address" -->
                    <!-- class="form-control" -->
                    <!-- value="{{ old('address') }}" -->
                    <!-- type="text" -->
                @if ($errors->has('address'))
                    <div class="text-danger">
                        {{ $errors->first('address') }}
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