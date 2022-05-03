<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umut Can Şeremet Veri-Çekme</title>
</head>
<body>

@foreach($book as $item)<br>
    {{$item->name}}<br>
    {{$item->surname}}
@endforeach

</body>
</html>
