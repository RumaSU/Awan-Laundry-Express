<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/15f35fc9f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-icons/bootstrap-icons.min.css')}}">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }
        .aspect-square {
            aspect-ratio: 1/1;
        }
    </style>
    <title>@yield('titlePage')</title>
    @yield('head-field')
</head>
<body>
    <header>
        @include('layouts.main.header')
    </header>
    <nav class="py-6  bg-[#FFDCE8] sticky">
        @include('layouts.main.nav')
    </nav>
    @yield('main-content')
    <footer class="py-6 bg-[#FF3377]">
        @include('layouts.main.footer')
    </footer>
    

    <script src="{{asset('assets/js/main/navMobile.js')}}"></script>
    @yield('script-field')
</body>
</html>