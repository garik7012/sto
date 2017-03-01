@extends('.layouts.master')
@section('title', 'Новости')
@section('content')
    @foreach($news as $newsItem)
        {{$newsItem->title}}
    @endforeach
@endsection
