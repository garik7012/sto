@extends('layouts.master')
@section('title', "{$content[0]->title}")
@if($content[0]->keywords != '')
    @section('keywords', $content[0]->keywords)
@endif
@if($content[0]->description != '')
    @section('description', $content[0]->description)
@endif
@section('content')
    <section class="services">
        <div class="services__list">
            <ul class="services-list">
                @foreach($allServices as $service)
                <li class="services__item">
                    <a href="/service/{{$service->link}}" class="services-link">
                        <div class="services-link__title">
                            <span>{{$service->title}}</span>
                        </div>

                        <span class="services-link__img">
								<img class="services-link__pic" src="/{{$service->photo}}" alt="">
							</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection