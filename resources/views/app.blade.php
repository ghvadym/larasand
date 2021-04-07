<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/hero.jpeg') }}">
</head>
<body class="auth {{ $body_class }}">

    <header>
        @include('auth.inc.header')
    </header>

    <main>
        @if ($errors->any())
            @include('inc.errors')
        @endif

        @if(session('success') || session('warning') || session('status'))
            @include('inc.alert')
        @endif

        @yield('content')
    </main>

    <footer>
        @include('inc.footer')
    </footer>

</body>
</html>
