@extends('layouts.main.index')

@section('main-content')
    <div class="ctr">
        <div class="ctr-sdbr">
            @include('layouts.store.sidebar')
        </div>
        <div class="ctr-mn">
            <main>
                @yield('main-content-store')
            </main>
        </div>
    </div>
@endsection