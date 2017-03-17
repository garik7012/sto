@extends('layouts.master')
@section('title', $service->title)
@section('keywords', $service->keywords)
@section('description', $service->description)
@section('content')
    <div class="services-description-main">
        <div class="services-description__top">
            <div class="services-description__image">
            <div class="services-desc-img">
                <div class="services-desc-img__img">
                    <div class="services-desc-img__wrap">
                        <img src="/{{$service->photo1}}" alt="">
                    </div>
                </div>

                <div class="services-desc-img__img">
                    <div class="services-desc-img__wrap">
                        <img src="/{{$service->photo2}}" alt="">
                    </div>
                </div>

                <div class="services-desc-img__img">
                    <div class="services-desc-img__wrap">
                        <img src="/{{$service->photo3}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="services-description">
        <div class="services-description__left">
            <div class="services-description__text">
                <div class="services-text">
                    {!! $service->text !!}
                </div>
            </div>
        </div>
        <div class="services-description__right">
            <div class="services-form">
                <div class="services-form__title">
						<span class="services-form__title-top">
							Записаться на
						</span>

                    <span class="services-form__title-main">
							мега -сервис
						</span>
                </div>

                <form action="/online/add" method="post" class="services-form__form">
                    <input type="text" name="fio" class="services-form__input" placeholder="Имя" required>

                    <input type="tel" name="phone" class="services-form__input" placeholder="Телефон" required>

                    <input type="email" name="email" class="services-form__input" placeholder="Email">
                    <!--НУЖНО В ВЕЛЪЮ ВСТАВИТЬ ДАТУ-->
                    <input id="datepicker2" type="text" name="order_date" class="services-form__input" placeholder="Дата">

                    <select name="order_time" class="services-form__select">
                        <option>Время</option>
                        <option value="09.00">09.00</option>
                        @for($i = 10; $i<18; $i++)
                            @for($j = 0; $j<4; $j+= 3)
                             <option value="{{$i}}.{{$j}}0">{{$i}}.{{$j}}0</option>
                            @endfor
                        @endfor
                        <option value="18.00">18.00</option>
                    </select>

                    <select class="services-form__select" name="service">
                        <option>Услуга</option>
                        @foreach($listServices as $service)
                            <option value="{{$service->id}}">{{$service->title}}</option>
                        @endforeach
                    </select>
                    {{csrf_field()}}
                    <input name="from_service" class="services-btn services-form__btn" type="submit" value="записаться">
                </form>
            </div>
            <script src="/js/jquery.ui.datepicker-ru.js"></script>
            <script src="/js/jquery-ui_old.js"></script>
            <script>
                $(document).ready(function () {
                    var currentDate = "{{date('d.'.'m.'.'Y')}}";
                    //делаем неактивные воскресенья
                    function disableWeekend() {
                        $('td:nth-child(7)').addClass('ui-datepicker-unselectable ui-state-disabled ')
                    }
                    setInterval(disableWeekend, 500);
                    $( "#datepicker2" ).datepicker({
                        altField: "#alternate",
                        altFormat: "DD, d MM, yy",
                        minDate: 0,
                        maxDate: "+3M",
                        regional: 'ru',
                        onSelect: function (selectedDate) {
                            $('#choosenDate').text(selectedDate);
                            checkTime(selectedDate);
                        }
                    });
                    $('.morning__item').click(function () {
                        var choosenTime = $('input[name=oreder_time]:checked').val();
                        $('#choosenTime').text(choosenTime);
                    });
                    //делаем неактивное сегодняшнее время +
                    function disableTime() {
                        var time = new Date();
                        var hour = time.getHours();
                        var minute = time.getMinutes();
                        var shifft = (hour - 8)*2;
                        if(minute > 30) shifft++;
                        if(shifft>0) {
                            for (var i = 1; i <= shifft+1; i++) {
                                $('#time-' + i).prop('disabled', true);
                            }
                        }
                    }
                    disableTime();
                    function enableTime() {
                        for (var i = 1; i <= 19; i++) {
                            $('#time-' + i).prop('disabled', false);
                        }
                    }
                    function checkTime(selectedDate) {
                        if(selectedDate == currentDate){
                            disableTime();
                        } else enableTime();
                    }

                });
            </script>
        </div>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $('.services-description').click(function () {
                var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
                if(iOS) {
                    $('input[name=fio]').focus();
                }
            });

            if(window.innerWidth < 650) {
                $('html, body').animate({
                    scrollTop: $('.services-description-main').offset().top
                }, 1000);
            }
        });

    </script>
    <section class="main-banner">
        <div class="top-section__logo-company">
            <div class="logo-company">
                <div class="logo-companyr__slider">
                    <div class="owl-carousel-2 owl-carousel owl-theme">
                        <div class="logo-company__img  item">
                            <img src="/img/logo-company/79440track-iveco-logo.jpg" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/787263fiat.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/490091land-rover-logo-png.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/772686ford1.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/426234logo-citroen.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444213875-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444215265-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444230850-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448879564-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448880091-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448880093-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/461358newholland-mini.png" alt="">
                        </div>

                        <div class="logo-company__img  item">
                            <img src="/img/logo-company/79440track-iveco-logo.jpg" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/787263fiat.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/490091land-rover-logo-png.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/772686ford1.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/426234logo-citroen.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444213875-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444215265-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1444230850-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448879564-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448880091-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/1448880093-md.png" alt="">
                        </div>

                        <div class="logo-company__img  item" >
                            <img src="/img/logo-company/461358newholland-mini.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.services')
@endsection