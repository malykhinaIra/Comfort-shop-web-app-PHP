@extends('master')
@section('title')
    Каталог
@endsection
@section('content')
<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="css/catalog.css">
</head>

<body>
    <div class="catalog">
        <div class="rooms">
            @foreach($rooms as $room)
                <a href="/Catalog/{{$room->id}}">{{ $room->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="mobile">
        <a href="#">
            <h1>ВСІ ТОВАРИ<img class="arr" src="img/Line 15.svg"></h1>
        </a>
    </div>
    <main>
        <section class="picture">
            <h1>КАТАЛОГ ТОВАРІВ</h1>
            <img src="img/image 23.png" width="100%">
        </section>
        <section class="full-catalog" style="margin-top: -15px;">
            <div class="container">
                <br>
                <div class="row">
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/1"><img src="img/image 24.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Стілець, дерев’яний</p>
                                </div>
                                <p>800 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/2"><img src="img/image 25.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Крісло, дерево & шкіра</p>
                                </div>
                                <p>1300 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col" id="third">
                        <div class="filters">
                            <h2>Усі товари</h2>
                            <hr>
                            @foreach($categories as $category)
                            <p><a href="/Catalog/category/{{$category->id}}">{{ $category->name }}</a></p>
                             @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/3"><img src="img/image 26.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Настінна картина</p>

                                </div>
                                <p>1230 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/4"><img src="img/image 27 (1).png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Журнальний столик</p>
                                </div>
                                <p>980 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="third">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/5"><img src="img/image 35.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Тумбочка з відділами</p>
                                </div>
                                <p>780 грн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/6"><img src="img/image 37.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Диван розкладний</p>
                                </div>
                                <p>3220 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/7"><img src="img/image 36.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Тумбочка, дерев’яна</p>
                                </div>
                                <p>1360 грн</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4" id="third">
                        <div>
                            <div class="image">
                                <a href="/Catalog/item/8"><img src="img/image 31.png"></a>
                            </div>
                            <div class="price">
                                <div>
                                    <p>Крісло, біле</p>
                                </div>
                                <p>980 грн</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=""><img src="img/Group 66.svg" class="button"></a>
            </div>
        </section>
    </main>
    <br><br>
</body>
@endsection
