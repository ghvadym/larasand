<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>{{ $title }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/hero.jpeg') }}">

    </head>
    <body class="{{ $body_class }}">

        <header>
            @include('inc.header')
        </header>

        <main>
            @if ($errors->any())
                @include('inc.errors')
            @endif

            @if(session('success'))
                @include('inc.alert')
            @endif

            @if(session('warning'))
                @include('inc.alert')
            @endif

            @yield('content')
        </main>

        <footer>
            @include('inc.footer')
        </footer>

    </body>
</html>
