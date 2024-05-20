@extends('layouts.main.index')
@section('titlePage', 'Homepage')

@section('head-field')
{{--untuk link css dll--}}
@endsection


@section('main-content')
<main class="min-h-[100vh] my-6">
    <div class="ctr-specialForUser mt-10">
        <div class="cSpecialFUser">
            <div class="headSpecial ml-[2.5%]">
                <div class="tx text-[#FF3377] italic font-black" style="text-shadow: 0 4px 2px rgba(0, 0, 0, 0.2)">
                    <h2>Spesial Untukmu</h2>
                </div>
            </div>
            <div class="ctr-specialList mt-0.5 mx-auto w-[95%] h-44 border-[3px] border-gray-400 p-2 rounded-xl">
                <div class="cSpecialList h-full relative ">
                    <div class="ctr-cSpecialList h-full overflow box-border">
                        <div class="cLstSpecial flex items-center h-full relative">
                            <div class="ctr-spcItm absolute w-full h-full transition-all translate-x-[0]">
                                <div class="cSpecialItm1 h-full">
                                    <div class="pctSpc h-full">
                                        <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-nxtBckSpcList text-4xl text-[#3A3A3A]">
                        <div class="ctr-backSpc py-2 px-1 absolute z-10 left-0 top-1/2 -translate-y-1/2">
                            <div class="cBackSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ctr-nextSpc py-2 px-1 absolute z-10 right-0 top-1/2 -translate-y-1/2">
                            <div class="cNextSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


@section('script-field')

@endsection
