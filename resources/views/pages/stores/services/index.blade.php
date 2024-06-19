@extends('layouts.store.index')
@section('titlePage', 'Toko - Layanan')

@section('head-link-field')

@endsection

@section('head-style-field')
    
@endsection

@section('main-content-store')
    <div class="ctr-promo mt-8">
        <div class="cPromo">
            <div class="ctr-headPromo">
                <div class="cHeadPromo flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-0">
                    <div class="ctr-titlServ shrink-0">
                        <div class="cTitlServ">
                            <div class="titleServ ml-[3%] md:ml-[7%]">
                                <div class="tx text-xl font-bold">
                                    <h2>Layanan</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-listServc mt-4 px-4">
                <div class="cListServc">
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white cursor-pointer overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCPromoItm gap-6 flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imagePromo aspect-square w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full border border-black">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Kiloan</h2>
                                                    </div>
                                                </div>
                                                <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                    {{-- <div class="txDVlTServc">
                                                        <p>Per 1 kg : {{ (rand(50, 100) * 100) }}</p>
                                                    </div> --}}
                                                    <div class="lblDatThsServc">
                                                        <div class="tx">
                                                            <p>Per kg :</p>
                                                        </div>
                                                    </div>
                                                    <div class="valDatThsServc">
                                                        <div class="txOtptDtThsServc font-semibold text-[#FF3377]">
                                                            <div class="tx">
                                                                <p>Rp. {{ number_format((rand(50, 100) * 100)) }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="inpFldDtValThsServc">
                                                            <input type="text" name="" id="" class="px-1.5 py-1 rounded-md text-sm" spellcheck="false" value="qweigbuqioebg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actvteThsServc">
                                                    <label for="actvThsKilosServc" class="border border-black">
                                                        <div class="ctr-thsServcActv">
                                                            <div class="cThsServcActv w-20 h-6 rounded-full border border-black relative">
                                                                <input type="checkbox" name="" id="actvThsKilosServc" class="peer">
                                                                <div class="rndBall h-6 aspect-square rounded-[100%] border border-black relative top-0 left-0 -translate-x-0 peer-checked:left-full peer-checked:-translate-x-full"></div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white cursor-pointer overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCPromoItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imagePromo aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Satuan</h2>
                                                    </div>
                                                </div>
                                                <div class="ctr-listDetServc mt-2">
                                                    <div class="cListDetServc sm:-space-y-1 text-xs sm:text-sm">
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 1</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{3,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 2</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 3</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20}}%</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white cursor-pointer overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCPromoItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imagePromo aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Meteran</h2>
                                                    </div>
                                                </div>
                                                <div class="ctr-listDetServc mt-2">
                                                    <div class="cListDetServc sm:-space-y-1 text-xs sm:text-sm">
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 1</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{3,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 2</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 3</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20}}%</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white cursor-pointer overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCPromoItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imagePromo aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Ongkir</h2>
                                                    </div>
                                                </div>
                                                <div class="ctr-listDetServc mt-2">
                                                    <div class="cListDetServc sm:-space-y-1 text-xs sm:text-sm">
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 1</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{3,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 2</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20,999}}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detServc flex items-center justify-between">
                                                            <div class="txLbDtPrm">
                                                                <div class="tx">
                                                                    <p>Baju 3</p>
                                                                </div>
                                                            </div>
                                                            <div class="prcOrDscDtPrm line-clamp-1">
                                                                <div class="tx">
                                                                    <p>~ Rp. @{{20}}%</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('different-content-store')

@endsection

@section('popup-content-field')
    {{-- @php
        $totalPriceTransaction = 0;
        $randShpp = rand(90, 170) * 100;
        $getDiscountTransaction = rand(1, 100) / 100;
    @endphp
    @include('pages.stores.promo.shwMdlDetPromo')
    @include('pages.stores.promo.shwMdlCrtPromo') --}}
    {{-- @include('pages.stores.services.shwMdlServc') --}}
@endsection

@section('script-field')
    <script src="{{asset('assets/js/pages/stores/promo/mdPromo.js')}}"></script>
    <script src="{{asset('assets/js/pages/stores/orders/mdOrd.js')}}"></script>
    <script src="{{ asset('assets/js/pages/stores/promo/mdCrtPromo.js') }}"></script>
    {{-- <script>
        document.getElementById('DtUntlMdlCrtePrmo').addEventListener('click', function() {
            document.getElementById('DtUntlMdlCrtePrmo').focus();
            document.getElementById('DtUntlMdlCrtePrmo').click();
        });
    </script> --}}
@endsection
