@extends('layouts.master')
@section('title', "{$content[0]->title}")
@if($content[0]->keywords != '')
    @section('keywords', $content[0]->keywords)
@endif
@if($content[0]->description != '')
    @section('description', $content[0]->description)
@endif
@section('content')
    <section class="news-anons  news-anons--page">
        <div class="news-anons__list">
            <ul class="news-anons-list">
                @foreach($news as $newsItem)
                    <li class="news-anons-list__item">
                        <div class="news-anons-item">
                            <a href="/news/{{$newsItem->id}}" class="news-anons-item__img">
                                <img src="{{$newsItem->preview}}" alt="">

                                <div class="news-anons-item__hover-text">
                                    <span>Подробнее</span>
                                </div>
                            </a>

                            <div class="news-anons-item__time">
                                {{$newsItem->created_at}}
                            </div>

                            <div class="news-anons-item__desc">
                                {{$newsItem->title}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
