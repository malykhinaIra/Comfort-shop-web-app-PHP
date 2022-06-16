@extends('master')
@section('title')
Корзина
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/basket.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<hr style='margin-top: -2px;'>

<div class="container" style="min-height: 300px;">
    @foreach($items as $item)
    <br>
    <div>
        <div class="row" id="item">
            <div class='col'>
                <div class="image">
                    <a href="/Catalog/item/{{$item->id}}"><img src="{{$item->image}}" id="img"></a>
                </div>
            </div>
            <div class='col'>
                <div>
                    <p>{{$item->description}}</p>
                </div>
                <h3>{{$item->price}} грн</h3>
            <a href="/basket/remove/{{$item->id}}" style="width: 70px;"><img src="/img/cancel.png" style="width: 40px;"></a>

            </div>
            <a href="/basket/minus/{{$item->id}}" id="button"><img src="/img/minus.png" id="plus"></a>
            {{$item->pivot->quantity}}
            <a href="/basket/plus/{{$item->id}}" id="button"><img src="/img/plus.png" id="plus"></a>
        </div>
</div>
        @endforeach
        @if($total)
        <div style="margin-left: 33%;">
            <h1>Загальна вартість: {{$total}} грн</h1>
            <a href="/make_order" class="order">
                Оформити замовлення</a>
        </div>
        @else
        <div style="margin-top: 15%; text-align: center;">
        <p>Не додано жодного товару</p>
        <a href="/Catalog"><h1>Перейти до покупок</h1></a>
        </div>
        @endif
        <br><br>

</div>
</div>
</section>
<section class="special-offer">
    @endsection