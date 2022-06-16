@extends('master')
@section('title')
Замовлення
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/orderForm.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<hr style='margin-top: -2px;'>
<br>
<div class="row">
    <div class="col-45">
        <div class="container">
            <h4>Замовлення <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
            <hr>
            <p>Загальна вартість <span class="price" style="color:black"><b>{{$total}} грн</b></span></p>
        </div>
    <div class="col-75">
        <div class="container">
            <form action="/myOrders" method="POST">
            @csrf
                <div class="row">
                    <div class="col-50">
                        <h3>Доставка</h3>
                        <label for="name"><i class="fa fa-user"></i> ПІБ отримувача</label>
                        <input type="text" id="name" name="name" placeholder="Іванов Іван Іванович">
                        <label for="email"><i class="fa fa-envelope"></i> Електронна адреса</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com">
                        <label for="region"><i class="fa fa-address-card-o"></i> Область</label>
                        <input type="text" id="region" name="region" placeholder="Київська">
                        <label for="city"><i class="fa fa-institution"></i> Місто</label>
                        <input type="text" id="city" name="city" placeholder="Київ">

                        <div class="row">
                            <div class="col-50">
                                <label for="adr">Домашня адреса</label>
                                <input type="text" id="adr" name="adr" placeholder="вул. Хрещатик, 55">
                            </div>
                            <div class="col-50">
                                <label for="zip">Поштовий індекс</label>
                                <input type="text" id="zip" name="zip" placeholder="34400">
                            </div>
                        </div>
                    </div>

                    <div class="col-50">
                        <h3>Оплата</h3>
                        <label for="ccnum">Номер карти</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                        <label for="expmonth">Дійсна до: (місяць)</label>
                        <input type="text" id="expmonth" name="expmonth" placeholder="Вересень">

                        <div class="row">
                            <div class="col-50">
                                <label for="expyear">Дійсна до: (рік)</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2022">
                            </div>
                            <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                            </div>
                        </div>
                    </div>

                </div>
                <input type="submit" value="Оплатити" class="btn">
            </form>
        </div>
    </div>

    </div>
</div>
<br>

@endsection