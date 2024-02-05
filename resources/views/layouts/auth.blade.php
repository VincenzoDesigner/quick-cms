<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'Quick CMS') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}?v={{ time() }}">


</head>

<body>
    <section class="ftco-section">
        <div class="container">
            @yield('container')
        </div>
    </section>

    <script src="{{ asset('js/jquery-3.5.0.min.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}?v={{ time() }}"></script>
    <script src="{{ asset('js/auth.js') }}?v={{ time() }}"></script>

</body>

</html>
