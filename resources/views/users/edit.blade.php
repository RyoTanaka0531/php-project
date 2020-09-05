@extends('layouts/app')
@section('title', '編集')
@section('content')
<h2>ユーザー情報編集</h2>
<form action="/users/update" method="post" >
@csrf
<input type="hidden" name="id" value="{{$user->id}}">
    <div class="form-group">
        <input type="text" name="name" value="{{$user->name}}" class="form-control">
        @if ($errors->has('name'))
            <div class="text-danger">
                {{$errors->first('name')}}
            </div>
        @endif
    </div>
    <div class="form-group">
        <input type="text" name="profile" value="profile" class="form-control">
        @if ($errors->has('profile'))
            <div class="text-danger">
                {{$errors->first('profile')}}
            </div>
        @endif
    </div>
    <p><input type="submit" value="更新する" class="btn btn-primary"></p>
</form>
@endsection