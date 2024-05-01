@extends('layouts.main.index')

@section('main-content')
    <div class="ctr min-h-[100vh]">
        <div class="ctr-sdbr">
            @include('layouts.user.sidebar')
        </div>
        <div class="ctr-mn">
            <main>
                @yield('main-content-user')
            </main>
        </div>
    </div>
@endsection