@extends('master')
@section('title')
    Про нас
@endsection
@section('content')
<!DOCTYPE html>
<html lang="ua">

<head>
    <link rel="stylesheet" href="css/info.css">
</head>

<body>
    <hr class="hide">
    <main>
        <section class="main-img">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <img src="img/image 38.png" class="picture">
                        <img src="img/image 38 (1).png" class="picture-mobile">
                    </div>
                    <div class="col-6" id="frame">
                        <div style="margin: 0 auto;">
                            <h1>Пpo «COMFORT»</h1>
                            <p>Ми віримо, що комфорт повинен бути доступним кожному. Маєте бажання дізнатися більше?
                                <a href="#info"><div class="button"><img src="img/Group 63 (2).svg"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-features">
            <h1><a name="info"></a>МЕБЛЕВА ПРОМИСЛОВІСТЬ ПОТРЕБУЄ ЗМІН</h1>
            <div class="container">
                <br>
                <div class="row">
                    <div class="col">
                        <img src="img/image 40.png"
                            style="max-width: 100%; display: block;">
                    </div>
                    <div class="col">
                        <div class="feature">
                            <h2>Відповідність ціни та якості</h2>
                            <p>Нашим першим завданням було надати клієнтам можливість купувати стильні, комфортні, та
                                при цьому не надто дорогі меблі.</p>
                            <a href="#"><img src="img/Group 64.svg"> </a>
                        </div>
                    </div>
                </div>
                <div class="row" id="second">
                    <div class="col">
                        <div class="feature-1">
                            <h2>Інноваційний дизайн</h2>
                            <p>Наша студія закріплює свою практику в двох напрямках дизайну: американському модернізмі
                                та сучасному скандинавському стилі.</p>
                            <a href="#"><img src="img/Group 64.svg"> </a>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/image 30.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="unique">
            <h1>МИ НЕ ЗВИЧАЙНА МЕБЛЕВА КОМПАНІЯ</h1>
            <img src="img/image 27.png" width="100%">
            <div class="container">
                <p>Бути просто нормальними ніколи не було достатньо. У роздумах над компромісом між якістю, доступністю
                    та зручністю, ми заснували COMFORT з новим підходом до меблів.</p>
                <br>
                <img src="img/image 39.png" width="100%">
                <h2>ЗВ’ЯЖІТЬСЯ З НАМИ</h2>
                <div class="contacts" style="padding: 0px 20%; display: flex; justify-content: space-between; align-items: center;">
                    <a href="#"><img src="img/image 32.svg"></a>
                    <a href="#"><img src="img/image 33.svg"></a>
                    <a href="#"><img src="img/image 34.svg"></a>
                    <a href="#"><img src="img/image 35.svg"></a>
                    <a href="#"><img src="img/image 36.svg"></a>
                    <a href="#"><img src="img/image 37.svg"></a>
                </div>
            </div>
        </section>
    </main>
 </body> 
@endsection
