@extends('layouts.master')
@section('title', 'Шиномонтаж')
@section('content')


    <div class="services-description">
        <div class="services-description__left">
            <div class="services-description__image">
                <div class="services-desc-img">
                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/img/col1.png" alt="">
                        </div>
                    </div>

                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/img/col2.png" alt="">
                        </div>
                    </div>

                    <div class="services-desc-img__img">
                        <div class="services-desc-img__wrap">
                            <img src="/img/col3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="services-description__text">
                <div class="services-text">
                    <p>
                        Многим владельцам авто может показаться, что выбор шиномонтажа в Киеве – дело несложное. Буквально в каждом районе можно отыскать гаражную мастерскую, предлагающую соответствующие услуги по невысокой цене. Однако не следует спешить – ведь шиномонтаж должен быть не только дешевым, но и качественным. От этого напрямую зависит надежность авто, его комфорт, а также безопасность пассажира и водителей.
                    </p>

                    <p>
                        На деле определить профессиональный шиномонтаж довольно сложно. Здесь следует учитывать целый ряд характеристик. Первая из них – профессиональный опытный персонал, которому вы готовы доверить свое авто. Посмотрите на техническое оснащение шиномонтажа. Разумеется, обыкновенного домкрата, который есть на любой станции, для качественной работы недостаточно. Но и, наличие высокоточного инструмента не является гарантией качественного шиномонтажа. Техническое оборудование устаревает со временем, за ним необходимо ухаживать регулярно.
                    </p>
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

                <form class="services-form__form">
                    <input type="text" class="services-form__input" placeholder="Имя">

                    <input type="text" class="services-form__input" placeholder="Телефон">

                    <input type="text" class="services-form__input" placeholder="Email">
                    <!--НУЖНО В ВЕЛЪЮ ВСТАВИТЬ ДАТУ-->
                    <input type="text" class="services-form__input" placeholder="Дата">

                    <select  class="services-form__select">
                        <option>Время</option>

                        <option>Время</option>

                        <option>Время</option>

                        <option>Время</option>
                    </select>

                    <select class="services-form__select">
                        <option>Услуга</option>

                        <option>Услуга</option>

                        <option>Услуга</option>

                        <option>Услуга</option>
                    </select>

                    <input class="services-btn  services-form__btn" type="submit" value="записаться">
                </form>
            </div>
        </div>
    </div>

    @include('layouts.services')

@endsection