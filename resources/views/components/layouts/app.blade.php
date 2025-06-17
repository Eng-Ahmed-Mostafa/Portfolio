<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <!-- bootstrap css  -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <!-- Style css  -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <!-- font Awesome -->
        <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
        <!-- Google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    </head>
    <body>
        {{ $slot }}

         <!-- bootstrap js  -->
        <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
        <!-- jquery  -->
        <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
        <!-- interact js  -->
        <script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
        <!-- Scripts Js  -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
