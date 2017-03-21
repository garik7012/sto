@extends('layouts.master')
@section('title', $offer->title)
@if($offer->keywords != '')
    @section('keywords', $offer->keywords)
@endif
@if($offer->description != '')
    @section('description', $offer->description)
@endif
@section('content')

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
                    {!! $offer->article !!}
                </div>
            </div>
        </div>
    </article>
@endsection