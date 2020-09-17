@extends('admin.layout')
@section('main_content')
    <style>
        h1{
            text-shadow: 3px 1px #f7a0a0;
            font-family: sans-serif;
            font-style: oblique;
        }
    </style>
<div class="container">
    <h1>HELLO ADMIN</h1>
    <div class="dis-flex text-center">
        <img src="{{asset('img/home1.jpg')}}" alt="">
    </div>
</div>
@endsection
