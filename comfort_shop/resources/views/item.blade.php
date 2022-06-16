@extends('master')
@section('title')
{{$item->description}}
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/item.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>

<body>
    <hr style='margin-top: -2px;'>
    <br>
    <div class='container'>
        <img src='{{$item->image}}' id="img">
        <div class="con-1">
        <div class="con-2">
            <p style="font-size:20px;">{{$item->description}}</p>
            @if($user)
                @if(!$item->favourites->find($user->favourite_id))
                <a href="/favourite/add/{{$item->id}}"><img src="/img/image 21.png" id="button"></a>
                @else
                <a href="/favourite/remove/{{$item->id}}"><img src="/img/3388835.png" id="button"></a>
                @endif
            @else
            <a href="/User"><img src="/img/image 21.png" id="button"></a>
            @endif
        </div>
            <h3 style="text-decoration:underline;">{{$item->price}} грн</h3>
            <p>Категорії, до яких належить даний товар:</p>
            @foreach($item->rooms as $category)
            <li>
                <a href="/Catalog/{{$category->id}}">{{ $category->name }}</a>
            </li>
            @endforeach
            @if($user)
            <a href="/basket/add/{{$item->id}}" id="add">
                Додати в корзину</a>
            @else
            <a href="/User" id="add">
                Додати в корзину</a>
            @endif
        </div>
    </div>
    <br><br>
@endsection