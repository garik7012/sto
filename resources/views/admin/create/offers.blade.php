@extends('admin.layouts.master')
@section('offers')
<form action="/offers" method="post" enctype="multipart/form-data">
    <input type="file" name="preview">
    <input type="text" name="title" placeholder="название акции">
    <textarea name="description" cols="30" rows="10" placeholder="текст акции"></textarea>
    {{csrf_field()}}
    <input type="submit" value="добавить">
</form>
    @endsection