@extends('admin.layouts.master)
@section('content')
    <form action="/news" method="post" enctype="multipart/form-data">
        <input type="file" name="preview">
        <input type="text" name="title" placeholder="заголовок новости">
        <textarea name="description" cols="30" rows="10" placeholder="текст новости"></textarea>
        {{csrf_field()}}
        <input type="submit" value="добавить">
    </form>
@section('content')