<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <title>Alien</title>
</head>
<body>
  <div class="container">
    <img src="{{url('img/alien_1.jpg')}}" alt="alien 1">
    <h1>{{$name}}</h1>
    <h2>Voto: {{$vote}}</h2>
    <p>{{$description}}</p>
    <a href="/">Return Homepage</a>
  </div>
</body>
</html>