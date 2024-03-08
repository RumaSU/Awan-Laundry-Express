<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    <title>Document</title>
    @yield('head-field')
</head>
<body>
    <header>
        @include('layouts.main.header')
    </header>
    <nav>
        @include('layouts.main.nav')
    </nav>
    <main>
        @yield('main-content')
    </main>
    <footer>
        @include('layouts.main.footer')
    </footer>
    
    @yield('script-field')
</body>
</html>