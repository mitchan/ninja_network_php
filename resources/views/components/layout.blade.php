<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ninja Network</title>
    </head>
    <body>
        <header>
            <nav>
                <h1>Ninja Network</h1>
                <a href="/">All ninjas</a>
                <a href="/ninjas/create">Create New Ninja</a>
            </nav>
        </header>

        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>

