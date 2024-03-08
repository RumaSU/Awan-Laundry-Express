@extends('layouts.main.index')
@section('head-field')
    
@endsection

@section('main-content')
    <section class="top-section-page">
        <div class="contentWrapper lg:flex lg:justify-center lg:items-center border border-black">
            <div class="leftWrapper w-full bg-blue-600 p-8">
                <div class="leftContent text-white">
                    <div class="storeNameContent flex justify-between border border-black">
                        <div class="nameContent border border-black flex-grow">
                            <h1 class="text-6xl font-bold cursor-default">Awan Laundry Express</h1>
                        </div>
                        <div class="imgLogo border border-black w-1/4 aspect-auto flex items-center justify-center relative group">
                            <div class="img w-24 aspect-square border border-black shadow-black shadow-sm rounded-lg overflow-hidden relative z-[2]">
                                <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="absolute w-full h-full object-cover object-center">
                            </div>
                            <div class="ef absolute w-24 aspect-square">
                                <div class="l absolute top-1/2 right-1/2 border-t-4 border-r-4 border-black w-6 h-4 rounded-tr-lg group-hover:-right-2 group-hover:-top-2 group-hover:animate-bounce transition-all duration-300 ease-in-out delay-150"></div>
                                <div class="l absolute bottom-1/2 left-1/2 border-l-4 border-b-4 border-black w-6 h-4 rounded-bl-lg group-hover:-left-3 group-hover:-bottom-3 group-hover:animate-bounce transition-all duration-300 ease-in-out"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rightWrapper w-full bg-white">
                <div class="rightContent">
                    and this
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script-field')
    
@endsection