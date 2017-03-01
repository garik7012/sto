<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/news" method="post" enctype="multipart/form-data">
    <input type="file" name="preview">
    <input type="text" name="title" placeholder="заголовок новости">
    <textarea name="description" cols="30" rows="10" placeholder="текст новости"></textarea>
    {{csrf_field()}}
    <input type="submit" value="добавить">
</form>

</body>
</html>