@extends('layouts.master')
@section('title', "{$content[0]->title}")
@if($content[0]->keywords != '')
    @section('keywords', $content[0]->keywords)
@endif
@if($content[0]->description != '')
    @section('description', $content[0]->description)
@endif
@section('content')
    <section class="clearcss">

        {!! $content[0]->text !!}

    </section>
    @include('layouts.services')
@endsection
