@extends('layouts.master')
@section('title', $news->title)
@if($news->keywords != '')
    @section('keywords', $news->keywords)
@endif
@if($news->description != '')
    @section('description', $news->description)
@endif
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
                {!! $news->article !!}
                </div>
            </div>
        </div>
    </article>
@endsection