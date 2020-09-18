@extends('layouts/app')
@section('title', '食べナビ')
@section('content')
<h2>食べナビ</h2>
<div class="top-img">
    <img src="image/cafe.jpg" width="1150" height="500" alt="トップ写真">
</div>
    @if (session('flash_message'))
    <div class="flash_message bg-success text-center py-3 my-0">
        {{session('flash_message')}}
    </div>
@endif
@endsection