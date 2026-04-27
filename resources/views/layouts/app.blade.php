<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('image/Logo Nekoya.png') }}">
    <title>NEKOYA</title>

</head>
<body class="bg-slate-950 text-white">
    <x-navbar />

    @yield('content')

    <x-footer />

    @vite('resources/js/app.js')

    @include('componen.info')

</body>
</html>.
