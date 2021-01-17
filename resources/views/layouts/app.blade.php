<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name' , 'laravel') }} - Realtime data Covid-19 2021</title>
    <link rel="icon" href="../img/co-title.png">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <x-navbar></x-navbar>
        <main class="py-4" style="margin-top: 10%;">
            @yield('content')
        </main>
        <x-footer></x-footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/data.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>
</html>