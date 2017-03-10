@extends('layouts.master')
@section('title', "{$offer->title}")
@section('content')
    @include('layouts.topsection')
    <article class="news-page">
        <div class="news-page__banner">
            <div class="news-banner">
                <img src="/{{$offer->preview}}" alt="">
            </div>
        </div>

        <div class="news-page__desc">
            <div class="news-desc">
                <div class="news-desc__title">
                    <h2>{{$offer->title}}</h2>
                </div>
                <div class="clearcss news-page__desc">
                    {!! $offer->description !!}
                </div>
            </div>
        </div>
    </article>
@endsection