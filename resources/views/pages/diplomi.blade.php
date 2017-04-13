@extends('layouts.master')
<style>
    .diplomi-img__items {
        flex-wrap: wrap;
    }
    .diplomi-img__items .recomendations__item {
        width: 30%;
        margin: 1%;
        padding: 3px;
        height: inherit;
    }
</style>
@section('title', "Дипломы")
{{--@section('keywords', '')--}}
{{--@section('description', '')--}}
@section('content')
    <section class="news-anons  news-anons--page">
        <div id="recom-slider" class="recomendations owl-carousel">
            <a href="img/recom1.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom1.jpg" alt="alt"/>
            </a>
            <a href="img/recom2.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom2.jpg" alt="alt"/>
            </a>
            <a href="img/recom3.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom3.jpg" alt="alt"/>
            </a>
            <a href="img/recom4.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom4.jpg" alt="alt"/>
            </a>
            <a href="img/recom5.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom5.jpg" alt="alt"/>
            </a>
            <a href="img/recom6.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom6.jpg" alt="alt"/>
            </a>
            <a href="img/recom7.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom7.jpg" alt="alt"/>
            </a>
            <a href="img/recom8.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom8.jpg" alt="alt"/>
            </a>
            <a href="img/recom9.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom9.jpg" alt="alt"/>
            </a>
        </div>
        <div class="recomendations diplomi-img__items">
            <a href="img/recom4.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom4.jpg" alt="alt"/>
            </a>
            <a href="img/recom6.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom6.jpg" alt="alt"/>
            </a>
            <a href="img/recom7.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom7.jpg" alt="alt"/>
            </a>
            <a href="img/recom8.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom8.jpg" alt="alt"/>
            </a>
            <a href="img/recom9.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom9.jpg" alt="alt"/>
            </a>
            <a href="img/recom1.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom1.jpg" alt="alt"/>
            </a>
            <a href="img/recom2.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom2.jpg" alt="alt"/>
            </a>
            <a href="img/recom3.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom3.jpg" alt="alt"/>
            </a>
            <a href="img/recom5.jpg" class="recomendations__item  item  fancybox_b" data-fancybox-group="gallery-a">
                <img src="img/recom5.jpg" alt="alt"/>
            </a>
        </div>
    </section>
@endsection
