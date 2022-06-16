@extends('master')
@section('title')
    Comfort
@endsection
@section('content')
<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="css\main.css">
<script>
var slideIndex = 1;
document.addEventListener('DOMContentLoaded', function () {
  showSlides(slideIndex);
});

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}</script>
</head>

<body>
    <main class="main">
        <section class="main-img">
            <img src="img/main.png" width="100%">
            <div class="slogan">
                <h1>ВЛАШТУЙ ЗАТИШОК У ВЛАСНІЙ ОСЕЛІ</h1>
                <p>КУПУЙ МЕБЛІ ВИГІДНО РАЗОМ З «COMFORT»</p>
            </div>
            <a href="/Catalog" class="btn">Перейти до покупок</a>
        </section>
        <section class="benefits">
            <div class="container">
                <div class="benefits">
                    <p>ПЕРЕВАГИ</p>
                    <h1>ЧОМУ САМЕ МИ?</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="benefit">
                            <img src="img/Icon.svg">
                            <div class="benefit-text">
                                <h2>Екологічність</h2>
                                <p>Ми робимо важливі кроки, щоб зменшити негативний вплив на планету. Для нас це означає
                                    відповідальну торгівлю та виробництво. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="benefit">
                            <img src="img/Icon (1).svg">
                            <div class="benefit-text">
                                <h2>Повернення коштів</h2>
                                <p>Ви можете повернути товар назад у магазин і отримати свої кошти, за умови збереження
                                    чеку.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col">
                            <div class="benefit">
                                <img src="img/Icon (2).svg" class="icon">
                                <div class="benefit-text">
                                    <h2>Швидка доставка</h2>
                                    <p>Доставимо товар до ваших дверей прямо у день замовлення. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="benefit">
                                <img src="img/Icon (3).svg" class="icon">
                                <div class="benefit-text">
                                    <h2>Підтримуємо нові таланти</h2>
                                    <p>Для наших дизайнерів це означає бути частиною партнерства, яке ґрунтується на
                                        їхніх
                                        інтересах.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="room">
            <p class="shop">ШОПІНГ ПО КІМНАТАХ</p>
            <div class="slider">
    @foreach($rooms as $room)
    <div class="item">
        <a href="/Catalog/{{$room->id}}"><img src="{{$room->photo}}"></a>
    </div>
    @endforeach
    <a class="prev" onclick="minusSlide()"><img src="img/image 29.svg"></a>
    <a class="next" onclick="plusSlide()"><img src="img/image 30.svg"></a>
</div>

<div class="slider-dots">
    <span class="slider-dots_item" onclick="currentSlide(1)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(2)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(3)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(4)"></span> 
    <span class="slider-dots_item" onclick="currentSlide(5)"></span> 

</div>
        </section>
    </main>
    <br>
 
@endsection