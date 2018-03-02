<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
</head>
<body>
    <h1>LIBRAIRIE</h1>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/insert">Ajouter un livre</a></li>
                <li><a href="/insertGenre">Ajouter un genre</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('main')
    </main>
</body>
</html>