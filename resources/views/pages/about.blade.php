@extends('layouts.master')
@section('title', "{$content[0]->title}")
@section('content')
    <section class="clearcss">

        {!! $content[0]->text !!}

    </section>
    @include('layouts.services')
@endsection
