@extends('layouts.master')
@section('title', "{$news->title}")
@section('content')

    <article class="news-page">
        <div class="news-page__banner">
            <div class="news-banner">
                <img src="/{{$news->preview}}" alt="">
            </div>
        </div>

        <div class="news-page__desc">
            <div class="news-desc">
                <div class="news-desc__title">
                    <h2>{{$news->title}}</h2>
                </div>
                <div class="clearcss news-page__desc">
                {!! $news->description !!}
                </div>
            </div>
        </div>
    </article>
@endsection