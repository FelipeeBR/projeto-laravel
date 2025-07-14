<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="container d-flex flex-column justify-content-center vh-100 align-items-center">
            <div class="position-relative px-6 py-4">
                <a href="/" class="position-absolute top-0 start-50 translate-middle-x">
                    <x-application-logo class="d-inline-block" style="height: 2.25rem; width: auto;" />
                </a>
            </div>

            <div class="col-md-10 mx-auto col-lg-5">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
