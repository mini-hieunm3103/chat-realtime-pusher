<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite(['resources/js/app.jsx', "resources/js/Pages/{$page['component']}.jsx"])
        @inertiaHead
        <link rel="stylesheet" href="{{asset('front-end/css/template.dark.min.css')}}">
    </head>
    <body class="">
        @inertia
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

        <script src="{{asset('front-end/js/libs/jquery.min.js')}}"></script>
        <script src="{{asset('front-end/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('front-end/js/plugins/plugins.bundle.js')}}"></script>
        <script src="{{asset('front-end/js/template.js')}}"></script>
        <script src="{{asset('front-end/js/functions.js')}}"></script>
    </body>
</html>
