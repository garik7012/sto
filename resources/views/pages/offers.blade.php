@extends('layouts.master')
@section('title', 'Акции и предложения')
@section('content')
     <section class="news-anons  news-anons--page">
        <div class="news-anons__list">
            <ul class="news-anons-list">
                @foreach($offers as $offer)
                    <li class="news-anons-list__item">
                        <div class="news-anons-item">
                            <a href="/offers/{{$offer->id}}" class="news-anons-item__img">
                                <img src="{{$offer->preview}}" alt="">

                                <div class="news-anons-item__hover-text">
                                    <span>Подробнее</span>
                                </div>
                            </a>

                            <div class="news-anons-item__time">
                                {{$offer->created_at}}
                            </div>

                            <div class="news-anons-item__desc">
                                {{$offer->title}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
