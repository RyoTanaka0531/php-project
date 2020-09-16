@extends('layouts/app')
@section('title', '編集')
@section('content')
<h2>ユーザー情報編集</h2>
<form action="{{ route('users/update') }}" method="post">
@csrf
<input type="hidden" name="id" value="{{$user->id}}">
    <div class="form-group">
        <input type="text" name="name" value="{{$user->name}}" class="form-control">
        @error('name')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" name="profile" value="profile" class="form-control">
        @error('profile')
            <div class="text-danger">
                {{$message}}
            </div>
        @enderror
    </div>
    <p><input type="submit" value="更新する" class="btn btn-primary"></p>
</form>
@endsection