<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Primi passi</title>
</head>
<body>
  <h1>Hello World!</h1>

  @if ($name === 'Sigourney' && $lastname === 'Weaver')
    <h4>L'attore/attrice selezionato/a è corretto</h4>
    
  @endif

  <h2>Oggi parliamo dell'attrice : {{$name}} {{$lastname}}</h2>
  <h3>ecco alcuni dei sui film:</h3>

  <ul>
    @foreach ($films as $film )
      <li><a href="{{$film}}">{{$film}}</a></li>
    @endforeach
  </ul>

  
</body>
</html>