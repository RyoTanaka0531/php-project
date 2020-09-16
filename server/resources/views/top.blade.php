@extends('layouts/app')
@section('title', '食べナビ')
@section('content')
<h2>食べナビ</h2>
@if (session('flash_message'))
    <div class="flash_message bg-success text-center py-3 my-0">
        {{session('flash_message')}}
    </div>
@endif
@endsection