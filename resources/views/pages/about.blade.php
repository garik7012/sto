@extends('layouts.master')
@section('title', "{$content[0]->title}")
@section('content')
    @include('layouts.topsection')
    <section class="clearcss">

        {!! $content[0]->text !!}

    </section>
    @include('layouts.services')
@endsection
