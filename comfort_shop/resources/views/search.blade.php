@extends('master')
@section('title')
Пошук
@endsection
@section('content')

<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>
<hr style='margin-top: -2px;'>
<h1 style="text-align:center;">Результати пошуку "{{$search}}"</h1>
<br>
<section class="full-catalog" style="margin-top: -15px; min-height: 300px;">
    <div class="container">
        <div class="row">
            @foreach($items as $item)
            <div class="col-4">
                <div>
                    <div class="image">
                        <a href="/Catalog/item/{{$item->id}}"><img src="{{$item->image}}"></a>
                    </div>
                    <div class="price">
                        <div>
                            <p>{{$item->description}}</p>

                        </div>
                        <p>{{$item->price}} грн</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <a href=""><img src="/Catalog/img/Group 66.svg" class="button"></a>
    </div>
</section>
@endsection