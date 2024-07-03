@extends('layouts.main.index')

@section('main-content')
    @auth
        <div class="">
            {{ Auth::user() }}
        </div>
        {{-- <div class="">
            {{ Auth::user()->UserDetail }}
        </div>
        <div class="">
            {{ Auth::user()->UserAddress }}
        </div> --}}
        {{-- {{ Auth::user()->UserDetail() }} --}}
    @endauth
    <div class="ctr lg:flex justify-center">
        <div class="ctr-rtUser min-h-[100vh] 2xl:min-h-0 flex gap-2 md:gap-6 xl:gap-8 p-2  my-[2%] relative">
            <div class="ctr-sdbr flex-shrink-0 bg-white py-4 relative hidden md:block">
                @include('layouts.user.sidebar')
            </div>
            <div class="ctr-mn lg:w-[49rem] w-full">
                <main class="">
                    @yield('main-content-user')
                </main>
            </div>
        </div>
    </div>
    {{-- <div class="ctr-sdbr flex-shrink-0 py-4 float-left sticky top-0 overflow-auto border border-black lg:relative">
        @include('layouts.user.sidebar')
    </div>
    <div class="ctr-rtUser flex items-center-center border border-black">
        <div class="ctr-mn min-h-[100vh] mx-auto flex gap-2 md:gap-6 xl:gap-8 p-2  my-[2%] relative">
            <main class="">
                @yield('main-content-user')
            </main>
        </div>
    </div> --}}
    <div class="ctrDiffThisPage flex justify-center mt-10 mb-16">
        @yield('different-content-user')
    </div>
@endsection