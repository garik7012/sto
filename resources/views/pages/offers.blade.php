@extends('layouts.master')
@section('title', 'Акции и предложения')
@section('content')
    {{--@foreach($news as $newsItem)--}}
    {{--{{$newsItem->title}}--}}
    {{--@endforeach--}}
    @include('layouts.topsection')
    <section class="news-anons  news-anons--page">
        <div class="news-anons__list">
            <ul class="news-anons-list">
                <li class="news-anons-list__item">
                    <div class="news-anons-item">
                        <a href="" class="news-anons-item__img">
                            <img src="img/newitem.png" alt="">

                            <div class="news-anons-item__hover-text">
                                <span>Подробнее</span>
                            </div>
                        </a>

                        <div class="news-anons-item__time">
                            29.10.2016
                        </div>

                        <div class="news-anons-item__desc">
                            ПОДГОТОВКА К ЗИМЕ - ОСНОВНЫЕ МОМЕНТЫ
                        </div>
                    </div>
                </li>

                <li class="news-anons-list__item">
                    <div class="news-anons-item">
                        <a href="" class="news-anons-item__img">
                            <img src="img/newitem.png" alt="">

                            <div class="news-anons-item__hover-text">
                                <span>Подробнее</span>
                            </div>
                        </a>

                        <div class="news-anons-item__time">
                            29.10.2016
                        </div>

                        <div class="news-anons-item__desc">
                            ПОДГОТОВКА К ЗИМЕ - ОСНОВНЫЕ МОМЕНТЫ
                        </div>
                    </div>
                </li>

                <li class="news-anons-list__item">
                    <div class="news-anons-item">
                        <a href="" class="news-anons-item__img">
                            <img src="img/newitem.png" alt="">

                            <div class="news-anons-item__hover-text">
                                <span>Подробнее</span>
                            </div>
                        </a>

                        <div class="news-anons-item__time">
                            29.10.2016
                        </div>

                        <div class="news-anons-item__desc">
                            ПОДГОТОВКА К ЗИМЕ - ОСНОВНЫЕ МОМЕНТЫ
                        </div>
                    </div>
                </li>

                <li class="news-anons-list__item">
                    <div class="news-anons-item">
                        <a href="" class="news-anons-item__img">
                            <img src="img/newitem.png" alt="">

                            <div class="news-anons-item__hover-text">
                                <span>Подробнее</span>
                            </div>
                        </a>

                        <div class="news-anons-item__time">
                            29.10.2016
                        </div>

                        <div class="news-anons-item__desc">
                            ПОДГОТОВКА К ЗИМЕ - ОСНОВНЫЕ МОМЕНТЫ
                        </div>
                    </div>
                </li>

                <li class="news-anons-list__item">
                    <div class="news-anons-item">
                        <a href="" class="news-anons-item__img">
                            <img src="img/newitem.png" alt="">

                            <div class="news-anons-item__hover-text">
                                <span>Подробнее</span>
                            </div>
                        </a>

                        <div class="news-anons-item__time">
                            29.10.2016
                        </div>

                        <div class="news-anons-item__desc">
                            ПОДГОТОВКА К ЗИМЕ - ОСНОВНЫЕ МОМЕНТЫ
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection