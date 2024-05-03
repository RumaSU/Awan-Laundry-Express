@extends('layouts.main.index')

@section('main-content')
    <div class="ctr grid grid-cols-4 gap-2 p-2 border border-black">
        <div class="ctr-sdbr" style="grid-area: 1 / 2;">
            @include('layouts.store.sidebar')
        </div>
        <div class="ctr-mn" style="grid-area: 2 / -1;">
            <main>
                @yield('main-content-store')
            </main>
        </div>
    </div>
@endsection