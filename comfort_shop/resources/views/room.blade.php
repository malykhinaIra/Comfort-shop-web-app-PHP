@extends('master')
@section('title')
    {{$room->name}}
@endsection
@section('content')
<head>
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
</head>

<div class="catalog">
        <div class="rooms">
            @foreach($rooms as $category)
                <a href="/Catalog/{{$category->id}}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="mobile">
        <a href="#">
        </a>
    </div>
    <main>
        <section class="picture">
            @if(get_class($room)=="App\Models\Room")
            <h1 style="text-transform: uppercase;">ТОВАРИ ДЛЯ {{$room->genitive}}</h1>
            @else
            <h1 style="text-transform: uppercase;">{{$room->name}}</h1>
            @endif
        </section>
        <section class="full-catalog" style="margin-top: -15px;">
            <div class="container">
                <div class="row">
                @foreach($items as $item)

                <div class="col-4">
                <a href="/Catalog/{{$room->id}}"></a>
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
        <section class="special-offer">
@endsection
