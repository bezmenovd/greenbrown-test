<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuba theme</title>
    <link rel="stylesheet" href="{{ asset('themes/cuba/style.css') }}">
</head>
<body>

    <header>
        <nav>
            <a href="{{ route('index') }}">Главная</a>
            <a href="{{ route('contacts') }}">Контакты</a>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>

</body>
</html>
