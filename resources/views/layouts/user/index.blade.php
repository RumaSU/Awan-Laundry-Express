@extends('layouts.main.index')

@section('main-content')
    <div class="ctr flex justify-center border border-black">
        <div class="ctr-rtUser min-h-[100vh] flex gap-2 md:gap-6 xl:gap-8 p-2 border border-black my-[5%] relative">
            <div class="ctr-sdbr flex-shrink-0 py-4 border border-black">
                @include('layouts.user.sidebar')
            </div>
            <div class="ctr-mn border border-black w-full">
                <main class="border border-black">
                    @yield('main-content-user')
                </main>
            </div>
        </div>
    </div>
@endsection