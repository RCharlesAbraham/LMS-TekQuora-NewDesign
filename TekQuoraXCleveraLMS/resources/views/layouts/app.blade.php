<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'LMS')</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/layout.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v={{ time() }}">

    @stack('styles')
</head>
<body>
    @if(!in_array(Route::currentRouteName(), ['login', 'register', 'password.request', 'password.reset', 'verification.notice']))
        @include('partials.navbar')
    @endif

    <main class="main-content">
        @yield('content')
    </main>

    <script src="{{ asset('js/script.js') }}?v={{ time() }}"></script>
    @stack('scripts')
</body>
</html>
