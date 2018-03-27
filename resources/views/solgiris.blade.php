<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .giris{
            width:100%;
            height:60px;
            font-family: 'Raleway', sans-serif;
            font-size:12px;
            font-weight:200;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="giris">
        <h1>
        @if($name !== null)
            {{ 'Sevgili '.$name }}
        @endif
         Sol Taraftan Devam Ettiniz
        </h1>
    </div>
</body>
</html>