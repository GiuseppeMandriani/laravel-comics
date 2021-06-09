<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('head-title', 'DC COMICS')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Marvel:wght@400;700&display=swap" rel="stylesheet">
        {{-- Fav Icons --}}
        <link rel="icon" href={{ asset('./images/favicon.ico') }}>
        {{-- CSS Style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">



    </head>
    <body>
        {{-- HEADER --}}
        @include('partials.header')




        {{-- MAIN --}}
        <main>
            @yield('jumbo-content')
            @yield('content')
        </main>

        {{-- FOOTER --}}
        @include('partials.footer')








    {{-- JS --}}
    @yield('comics-script')
    {{-- <script src="{{ asset('js/app.js')}}"></script> --}}
    </body>
</html>