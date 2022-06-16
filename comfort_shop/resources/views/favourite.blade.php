@extends('master')
@section('title')
Вподобані
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/favourite.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<hr style='margin-top: -2px;'>

<div class="container" >
    @if(!$items->isEmpty())
    @foreach($items as $item)
    <br>
    <div>
        <div class="row" id="border">
            <div class='col'>
                <div class="image">
                    <a href="/Catalog/item/{{$item->id}}"><img src="{{$item->image}}" style="width: 200px;"></a>
                </div>
            </div>
            <div class='col'>
                <div>
                    <p>{{$item->description}}</p>
                </div>
                <h3>{{$item->price}} грн</h3>
            </div>
            <a href="/basket/add/{{$item->id}}" id="add">
                Додати в корзину</a>
            <a href="/favourite/remove/{{$item->id}}" id="remove"><img src="/img/cancel.png" style="width: 40px;"></a>

        </div>
    </div>
    @endforeach
    <br><br>
    @else
    <div class="no-items">
        <p>Не додано жодного товару</p>
        <a href="/Catalog">
            <h1>Перейти до каталогу</h1>
        </a>
    </div>
    @endif
</div>
@endsection