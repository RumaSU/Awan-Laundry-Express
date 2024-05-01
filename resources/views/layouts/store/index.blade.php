@extends('layouts.main.index')

@section('main-content')
    <div class="ctr">
        <div class="ctr-sdbr">
            @section('sidebar-content')
                @include('layouts.store.sidebar')
            @endsection
        </div>
        <div class="ctr-mn">
            <main>
                @yield('main-content-store')
            </main>
        </div>
    </div>
@endsection