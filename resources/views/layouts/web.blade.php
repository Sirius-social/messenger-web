<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased bg-gray-100">
    @include('web.includes.header')

    <main>
        @yield('content')
    </main>

    @include('web.includes.footer')
</body>
</html>
