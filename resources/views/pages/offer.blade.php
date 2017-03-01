@extends('.layouts.master')
@section('title', 'Акции и предложения')
@section('content')
    @foreach($offers as $offer)
        {{$offer->title}}
    @endforeach
@endsection
