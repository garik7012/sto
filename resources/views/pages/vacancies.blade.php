@extends('layouts.master')
@section('title', "{$content[0]->title}")
@section('content')
    <section class="vacancies">
        <div class="vacancies__banner">
            <div class="vacancies__banner__img">
                <img src="img/face-man.png" alt="">
            </div>
        </div>

        <div class="clearcss">
            {!! $content[0]->text !!}
        </div>
    </section>
    @include('layouts.services')
@endsection