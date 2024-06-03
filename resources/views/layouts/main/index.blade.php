@php
    $isThisStore = explode('/', url()->current());
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titlePage')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="icon" href="{{asset('assets/components/logoApp/Logo Awan Laundry.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-icons/bootstrap-icons.min.css')}}">
    @if (count($isThisStore) > 3)
        @if ($isThisStore[3] === 'store')
            <link rel="stylesheet" href="{{asset('assets/css/main/stores/s.css')}}">
        @endif
    @endif
    @yield('head-link-field')
    <script src="https://kit.fontawesome.com/15f35fc9f3.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: "Inter", sans-serif;
            box-sizing: border-box;
        }
        .selectDisable {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
        .aspect-square {
            aspect-ratio: 1/1;
        }
    </style>
    <style>
        .cListStore::-webkit-scrollbar {
            width: 5px;
        }
        .cListStore::-webkit-scrollbar-track {
            box-shadow: 0;
        }
        .cListStore::-webkit-scrollbar-thumb {
            background: #FF3377;
            border-radius: 10px;
        }
        .cListStore::-webkit-scrollbar-thumb:hover {
            background: #ff1E69;
        }
    </style>
    @yield('head-style-field')
</head>
<body>
    <header>
        @include('layouts.main.header')
    </header>
    <nav class="py-2 md:py-4 lg:py-6 bg-[#FFDCE8] sticky top-0 z-[9999]">
        @include('layouts.main.nav')
    </nav>
    @yield('main-content')
    <footer class="py-6 bg-[#FF3377]">
        @include('layouts.main.footer')
    </footer>
    

    <script src="{{asset('assets/js/main/navMobile.js')}}"></script>
    @yield('script-field')
    @if (count($isThisStore) > 3)
        @if ($isThisStore[3] === 'store')
            <script src="{{asset('assets/js/pages/stores/sidebar/s.js')}}"></script>
        @endif
    @endif
</body>
</html>