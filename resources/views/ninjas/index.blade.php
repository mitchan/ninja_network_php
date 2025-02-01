<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ninja Network - Home</title>
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
         <h2>Currently Available Ninjas</h2>

         @if($greeting == "hello")
            <p>Hi</p>
         @endif

         <ul>
            @foreach($ninjas as $ninja)
                <li>
                    <p>{{ $ninja['name'] }}</p>
                    <a href="/ninjas/{{ $ninja['id'] }}">View detail</a>
                </li>
            @endforeach
         </ul>
    </body>
</html>

