@extends('layouts.main.index')

@section('main-content')
    <div class="ctr flex justify-center ">
        <div class="ctr-rtUser min-h-[100vh] flex gap-2 md:gap-6 xl:gap-8 p-2  my-[2%] relative">
            <div class="ctr-sdbr flex-shrink-0 py-4 ">
                @include('layouts.user.sidebar')
            </div>
            <div class="ctr-mn  w-full">
                <main class="">
                    @yield('main-content-user')
                </main>
            </div>
        </div>
    </div>
    <div class="ctrDiffThisPage flex justify-center mt-10 mb-16">
        @yield('different-content-user')
    </div>
@endsection