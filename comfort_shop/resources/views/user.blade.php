@extends('master')
@section('title')
Мій профіль
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/user.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<hr style='margin-top: -2px;'>
<br>
@if($user)
<div class="container" style="display: flex">
    <img src="{{$user->photo}}" class="profile">
    <div>
        <h1>{{$user->name}}</h1>
        <p>{{$user->email}}</p>
        <p>{{$user->phone}}</p>
        <br><br>
        <div class="cont">
        <a href="/orders" id="orders">
            Мої замовлення</a>
        <div class="logout"><a href="/logout" id="logout">
                Вихід</a></div>
        </div>
    </div>
</div>
@else
<div class="container">
<h1 id="h1">Ви не авторизовані</h1>
<a href="/login" id="login">
            Увійти/зареєструватись</a>
</div>
@endif
@endsection