@extends('layouts.store.index')
@section('titlePage', 'Toko - Promo')

@section('head-link-field')

@endsection

@section('head-style-field')
    
@endsection

@section('main-content-store')
    <div class="ctr-promo mt-8">
        <div class="cPromo">
            <div class="ctr-headPromo">
                <div class="cHeadPromo flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-0">
                    <div class="ctr-titlLstFltrPromo shrink-0">
                        <div class="cTitlLstFltrPromo">
                            <div class="titlePromo ml-[3%] md:ml-[7%]">
                                <div class="tx text-xl font-bold">
                                    <h2>Daftar Promo</h2>
                                </div>
                            </div>
                            <div class="ctr-listFilterPromo mt-4 ml-[2%]">
                                <div class="cListFilterPromo selectDisable flex flex-wrap md:flex-nowrap items-center gap-2 font-bold">
                                    <div class="ctr-filterItm shrink-0">
                                        <div class="cFilterItm">
                                            <input type="radio" name="filterPromo" id="filterItmNewPromo" class="peer/NewPromo hidden sr-only" checked>
                                            <label for="filterItmNewPromo" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/NewPromo:bg-[#FF3377] peer-checked/NewPromo:text-white peer-checked/NewPromo:border-pink-900">
                                                <div class="cFNewPromo">
                                                    <div class="tx">Semua</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ctr-filterItm shrink-0">
                                        <div class="cFilterItm">
                                            <input type="radio" name="filterPromo" id="filterItmDonePromo" class="peer/DonePromo hidden sr-only">
                                            <label for="filterItmDonePromo" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/DonePromo:bg-[#FF3377] peer-checked/DonePromo:text-white peer-checked/DonePromo:border-pink-900">
                                                <div class="cFDonePromo">
                                                    <div class="tx">Kiloan</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ctr-filterItm shrink-0">
                                        <div class="cFilterItm">
                                            <input type="radio" name="filterPromo" id="filterItmPiecePromo" class="peer/PiecePromo hidden sr-only">
                                            <label for="filterItmPiecePromo" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/PiecePromo:bg-[#FF3377] peer-checked/PiecePromo:text-white peer-checked/PiecePromo:border-pink-900">
                                                <div class="cFPiecePromo">
                                                    <div class="tx">Satuan</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ctr-filterItm shrink-0">
                                        <div class="cFilterItm">
                                            <input type="radio" name="filterPromo" id="filterItmShippingPromo" class="peer/ShippingPromo hidden sr-only">
                                            <label for="filterItmShippingPromo" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/ShippingPromo:bg-[#FF3377] peer-checked/ShippingPromo:text-white peer-checked/ShippingPromo:border-pink-900">
                                                <div class="cFShippingPromo">
                                                    <div class="tx">Ongkir</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-crtNewPromo">
                        <div class="cCrtNewPromo">
                            <a id="crtNewPrmStr" class="block cursor-pointer md:px-6 py-2 rounded-lg hover:bg-[#ffdae6] border border-black">
                                <div class="txLblCrt font-semibold text-center">
                                    <div class="p">Tambah Promo</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-listPromo mt-4 px-4">
                <div class="cListPromo">
                    @for ($i = 0; $i < 3; $i++)
                        @php
                            $randThis = rand(1, 3);
                            $uuidThis = Str::uuid();
                        @endphp
                        <div class="ctr-promoItm relative mb-6 md:mb-4">
                            <div class="ctr-cPromoItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white cursor-pointer" data-promoId="{{ $uuidThis }}">
                                <div class="cPromoItm py-4 px-6">
                                    <div class="ctr-headPromoItm">
                                        <div class="cHeadPromoItm flex items-center justify-between selectDisable">
                                            <div class="ctr-lftEditThsPrm relative hover:brightness-90">
                                                <div class="cLftEditThsPrm px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg" data-promoId="{{ $uuidThis }}">
                                                    <div class="tx">
                                                        <strong>Edit</strong>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-rghtStatus">
                                                <div class="cStatusPromo px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
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
                                            <div class="ctr-rghtDetPromo w-full">
                                                <div class="cDetPromo select-none">
                                                    <div class="headDetPromo">
                                                        <div class="txHDet md:text-xl font-bold">
                                                            <h2>Pesanan Hemat Hingga Rp. @{{15,000}}</h2>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-listThisPromo mt-2">
                                                        <div class="cListThisPromo flex flex-wrap items-center gap-2">
                                                            <div class="cThisPromoItm border px-3 md:px-5 xl:px-7 py-1 text-xs md:text-sm font-bold rounded-full bg-gray-300">
                                                                <div class="cThisPrm">
                                                                    <div class="tx">Kiloan</div>
                                                                </div>
                                                            </div>
                                                            <div class="cThisPromoItm border px-3 md:px-5 xl:px-7 py-1 text-xs md:text-sm font-bold rounded-full bg-gray-300">
                                                                <div class="cThisPrm">
                                                                    <div class="tx">Satuan</div>
                                                                </div>
                                                            </div>
                                                            <div class="cThisPromoItm border px-3 md:px-5 xl:px-7 py-1 text-xs md:text-sm font-bold rounded-full bg-gray-300">
                                                                <div class="cThisPrm">
                                                                    <div class="tx">Ongkir</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-listDetPromo mt-2">
                                                        <div class="cListDetPromo sm:-space-y-1 text-xs sm:text-sm">
                                                            <div class="itm-detPromo flex items-center justify-between">
                                                                <div class="txLbDtPrm">
                                                                    <div class="tx">
                                                                        <p>Kiloan</p>
                                                                    </div>
                                                                </div>
                                                                <div class="prcOrDscDtPrm line-clamp-1">
                                                                    <div class="tx">
                                                                        <p>~ Rp. @{{3,999}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itm-detPromo flex items-center justify-between">
                                                                <div class="txLbDtPrm">
                                                                    <div class="tx">
                                                                        <p>Satuan (4)</p>
                                                                    </div>
                                                                </div>
                                                                <div class="prcOrDscDtPrm line-clamp-1">
                                                                    <div class="tx">
                                                                        <p>~ Rp. @{{3,999}} - @{{20,999}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="itm-detPromo flex items-center justify-between">
                                                                <div class="txLbDtPrm">
                                                                    <div class="tx">
                                                                        <p>Ongkir</p>
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
                                <div class="ctr-fooPromoItm mt-4 md:mt-1 py-4 px-6 bg-gray-300 rounded-b-xl">
                                    <div class="cFooPromoItm">
                                        <div class="ctr-lftNewCoupon flex flex-col sm:flex-row sm:items-center justify-between gap-2 sm:gap-0">
                                            <div class="cNewCoupon flex flex-col md:flex-row md:items-center justify-between w-full md:-space-y-1 text-sm text-gray-700">
                                                <div class="ctr-timeleftCoupon">
                                                    <div class="cTimeleftCoupon flex items-center gap-4">
                                                        <div class="lftIcnTimeleft">
                                                            <span class="icn text-xl md:text-2xl xl:text-3xl">
                                                                <i class="fa-regular fa-clock"></i>
                                                            </span>
                                                        </div>
                                                        <div class="txCTimeleft text-xs md:text-sm xl:text-base">
                                                            <div class="tx">
                                                                <p>hingga {{date("d F Y");}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ctr-conditionCoupun">
                                                    <div class="cConditionCoupon flex items-center gap-4">
                                                        <div class="lftIcnCondition">
                                                            <span class="icn text-xl md:text-2xl xl:text-3xl">
                                                                <i class="fa-solid fa-money-bill-wave"></i>
                                                            </span>
                                                        </div>
                                                        <div class="txCCondition">
                                                            <div class="txHCC text-sm">
                                                                <p>Kisaran Transaksi</p>
                                                            </div>
                                                            <div class="txCC text-xs md:text-[0.938rem]">
                                                                <p>Rp. 10,000 - 15,000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="headNewCoupon">
                                                    <div class="tx">
                                                        <p>Total Belanja</p>
                                                    </div>
                                                </div>
                                                <div class="cPrice">
                                                    <div class="tx font-bold">
                                                        <p>Rp. @{{21821817257125}}</p>
                                                    </div>
                                                </div> --}}
                                            </div>
                                            {{-- <div class="ctr-rghtShwDetPromo flex-shrink-0">
                                                <div class="cShwDetPromo">
                                                    <a href="" class="shwThs block px-4 md:px-8 lg:px-12 py-2 border border-black rounded-xl">
                                                        <div class="tx text-sm text-center sm:text-left font-semibold">
                                                            <p>Lihat Detail</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

@section('different-content-store')

@endsection

@section('popup-content-field')
    @php
        $totalPriceTransaction = 0;
        $randShpp = rand(90, 170) * 100;
        $getDiscountTransaction = rand(1, 100) / 100;
    @endphp
    @include('pages.stores.promo.shwMdlDetPromo')
    @include('pages.stores.promo.shwMdlCrtPromo')
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
