@extends('layouts.main.index')

@section('main-content')
    <div class="ctr lg:flex justify-center">
        <div class="ctr-rtStore min-h-[100vh] 2xl:min-h-0 flex gap-2 md:gap-6 xl:gap-8 p-2  my-[2%]">
            <div class="ctr-sdbr flex-shrink-0 bg-white py-4 relative hidden md:block">
                @include('layouts.store.sidebar')
            </div>
            <div class="ctr-mn lg:w-[49rem] w-full">
                <main class="">
                    @yield('main-content-store')
                </main>
            </div>
        </div>
    </div>
    <div class="ctrDiffThisPage flex justify-center mt-10 mb-16">
        @yield('different-content-store')
    </div>
@endsection