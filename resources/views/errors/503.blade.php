@extends('layouts.master')
@section('title', '503, Служба не доступна')
@section('content')
    <h1 style="margin-top: 10px; font-size: 20px; font-weight: bold">Служба не доступна</h1>
    <p>Возникла ошибка из-за временной перегрузки или отключения на техническое обслуживание сервера (получен код 503 Service Unavailable).</p>
    <a href="/"><h2 style="margin: 10px 0; font-size: 16px;">вернуться на главную</h2></a>
@endsection