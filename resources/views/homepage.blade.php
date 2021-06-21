<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('css/style.css')}}">
  <title>Primi passi</title>
</head>
<body>
  <div class="container">
    <h1>Hello World!</h1>

    @if ($name === 'Sigourney' && $lastname === 'Weaver')
      <h4>L'attore/attrice selezionato/a è corretto</h4>
      
    @endif

    <img class="profile" src="{{url('img/Sigourney_Weaver.jpg')}}" alt="">
    <h2>Oggi parliamo dell'attrice : {{$name}} {{$lastname}}</h2>
    <h3>ecco alcuni dei sui film:</h3>

    <ul>
      @foreach ($films as $film )
        <li><a href="{{$film}}">{{$film}}</a></li>
      @endforeach
    </ul>
  </div>

  
</body>
</html>