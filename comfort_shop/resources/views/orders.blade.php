@extends('master')
@section('title')
Мої замовлення
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <style>
        li {
            display: inline; 
            margin-right: 5px; 
            border: 1px solid #000; 
            padding: 3px; 
        }

    </style>
</head>
<hr style='margin-top: -2px;'>
<br>
<div class='container' style='text-align: center; margin: auto; min-height: 300px;'>
<br>
<h2>Список замовлень</h2>
@foreach($orders as $order)
<ul>
<div style="border: 0.1px solid rgba(0, 0, 0, 0.555);">
<h2>Замовлення №{{ $order->id }}</h2>
<p>Дата: {{ $order->date }}</p>
    @foreach($order->items as $item)
        <div class="row" style=" padding: 30px 30px; align-items: center; width: 50%; margin-left: 25%;">
            <div class='col'>
                <div class="image">
                    <a href="/Catalog/item/{{$item->id}}"><img src="{{$item->image}}" style="width: 200px;"></a>
                </div>
            </div>
            <div class='col'>
                <div>
                    <p>{{$item->description}}</p>
                    <p>Кількість: {{$item->pivot->amount}}</p>
                </div>
                <h3>{{$item->price}} грн</h3>
            </div>
        </div>
    @endforeach
    <p>Замовник: {{$order->name}}</p>
    <p>Адреса доставки: {{$order->region}}, м. {{$order->city}}, {{$order->address}}</p>
    <h2>Загальна вартість: {{ $order->amount }} грн</h2>
</div>
</ul>
@endforeach
</div>
@endsection
