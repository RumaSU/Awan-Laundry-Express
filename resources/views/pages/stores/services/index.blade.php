@extends('layouts.store.index')
@section('titlePage', 'Toko - Layanan')

@section('head-meta-field')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('head-link-field')

@endsection

@section('head-style-field')
    
@endsection

@section('main-content-store')
    <div class="ctr-services mt-8">
        <div class="cServices">
            <div class="ctr-headServices">
                <div class="cHeadServices flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-0">
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
            <div class="ctr-listServcStore mt-4 px-4">
                <div class="cListServcStore">
                    @php
                        $activeServc = 'bg-[#FF3377] text-white font-bold';
                        $notActiveServc = 'bg-[#D9D9D9] text-gray-800';
                    @endphp
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl {{ isset($serviceKilos->active) ? (($serviceKilos->active) ? $activeServc : $notActiveServc) : $notActiveServc}}">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>{{ isset($serviceKilos->active) ? (($serviceKilos->active) ? 'Aktif' : 'Nonaktif') : 'Nonaktif' }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[542px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[542px]:aspect-square min-[542px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Kiloan</h2>
                                                    </div>
                                                </div>
                                                <form class="formFieldSveServc" data-saveServcUrl="{{ route('store\services\kilos') }}">
                                                    <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                        <div class="lblDatThsServc">
                                                            <div class="tx">
                                                                <p>Per kg :</p>
                                                            </div>
                                                        </div>
                                                        <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                            <div class="inpFldDtValThsServc flex items-center gap-2">
                                                                <div class="lblInpThsServc">
                                                                    <label for="inpServiceStorePriceKilos">
                                                                        <p>Rp. </p>
                                                                    </label>
                                                                </div>
                                                                <div class="inpFld block">
                                                                    <input type="text" name="inpServiceStorePriceKilos" id="inpServiceStorePriceKilos" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false" value="{{ number_format(isset($serviceKilos->price) ? $serviceKilos->price : 0) }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="successMessages text-sm text-green-700 my-3 space-y-2"></div>
                                                    <div class="errorMessages text-sm text-red-600 my-3 space-y-2"></div>
                                                    <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                        <div class="actvteThsServc">
                                                            <label for="actvThsKilosServc" class="block w-fit mt-2">
                                                                <div class="ctr-thsServcActv">
                                                                    <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                        <input type="checkbox" name="actvThsKilosServc" id="actvThsKilosServc" class="peer sr-only" {{ isset($serviceKilos->active) ? (($serviceKilos->active) ? 'checked' : '') : '' }}>
                                                                        <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="saveThsServc mt-2">
                                                            <button type="button" class="btn-sveServcKilos border border-black px-4 py-2 rounded-lg">
                                                                <div class="cBtnSve flex items-center gap-2">
                                                                    <div class="icnSve">
                                                                        <span class="icn">
                                                                            <i class="far fa-floppy-disk"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="lbelSave">
                                                                        <div class="tx">
                                                                            <p>Simpan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $isActive = false;                                            
                                        @endphp
                                        @if (isset($serviceUnits))
                                            @php
                                                foreach ($serviceUnits as $k => $unit) {
                                                    if ($unit->active) {
                                                        $isActive = true;
                                                        break;
                                                    }
                                                }
                                            @endphp
                                        @endif
                                        @php
                                            
                                        @endphp
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>{{ $isActive ? 'Aktif' : 'Nonaktif' }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[542px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[542px]:aspect-square min-[542px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc flex justify-between items-center">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Satuan</h2>
                                                    </div>
                                                    <button type="button" class="addNewClothesServc border border-black rounded-lg flex items-center gap-2 px-4 py-2 text-sm">
                                                        <span class="icnAdd">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                        <div class="txAddClths">
                                                            <p>Tambah Pakaian</p>
                                                        </div>
                                                    </button>
                                                </div>
                                                <form class="formFieldSveServc" data-saveServcUrl="{{ route('store\services\units') }}" data-URLUnitFrom="{{ route('store\services\listUnits') }}" data-URLEmptyUnit="{{ route('store\services\emptyUnits') }}">
                                                    @include('pages.stores.services.servcUnit')
                                                </form>
                                                <div class="successMessages text-sm text-green-700 my-3 space-y-2"></div>
                                                <div class="errorMessages text-sm text-red-600 my-3 space-y-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 {{ isset($serviceMeters->active) ? (($serviceMeters->active) ? $activeServc : $notActiveServc) : $notActiveServc}}">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>{{ isset($serviceMeters->active) ? (($serviceMeters->active) ? 'Aktif' : 'Nonaktif') : 'Nonaktif' }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Meteran</h2>
                                                    </div>
                                                </div>
                                                <form class="formFieldSveServc" data-saveServcUrl="{{ route('store\services\meters') }}">
                                                    <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                        <div class="lblDatThsServc">
                                                            <div class="tx">
                                                                <p>Per meter :</p>
                                                            </div>
                                                        </div>
                                                        <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                            <div class="inpFldDtValThsServc flex items-center gap-2">
                                                                <div class="lblInpThsServc">
                                                                    <label for="inpServiceStorePriceMeters">
                                                                        <p>Rp. </p>
                                                                    </label>
                                                                </div>
                                                                <div class="inpFld block">
                                                                    <input type="text" name="inpServiceStorePriceMeters" id="inpServiceStorePriceMeters" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false" value="{{ number_format(isset($serviceMeters->price) ? $serviceMeters->price : 0) }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="successMessages text-sm text-green-700 my-3 space-y-2"></div>
                                                    <div class="errorMessages text-sm text-red-600 my-3 space-y-2"></div>
                                                    <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                        <div class="actvteThsServc">
                                                            <label for="actvThsMetersServc" class="block w-fit mt-2">
                                                                <div class="ctr-thsServcActv">
                                                                    <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                        <input type="checkbox" name="" id="actvThsMetersServc" class="peer sr-only" {{ isset($serviceMeters->active) ? (($serviceMeters->active) ? 'checked' : '') : '' }}>
                                                                        <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                        <div class="saveThsServc mt-2">
                                                            <button type="button" class="btn-sveServcMeters border border-black px-4 py-2 rounded-lg">
                                                                <div class="cBtnSve flex items-center gap-2">
                                                                    <div class="icnSve">
                                                                        <span class="icn">
                                                                            <i class="far fa-floppy-disk"></i>
                                                                        </span>
                                                                    </div>
                                                                    <div class="lbelSave">
                                                                        <div class="tx">
                                                                            <p>Simpan</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
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
                                    <div class="cCServcItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Ongkir</h2>
                                                    </div>
                                                </div>
                                                <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                    <div class="lblDatThsServc">
                                                        <div class="tx">
                                                            <p>Per KM :</p>
                                                        </div>
                                                    </div>
                                                    <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                        <div class="inpFldDtValThsServc flex items-center gap-2">
                                                            <div class="lblInpThsServc">
                                                                <label for="inpServiceStorePriceShipping">
                                                                    <p>Rp. </p>
                                                                </label>
                                                            </div>
                                                            <div class="inpFld block">
                                                                <input type="text" name="inpServiceStorePriceShipping" id="inpServiceStorePriceShipping" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false" value="0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                    <div class="actvteThsServc">
                                                        <label for="actvThsShippingServc" class="block w-fit mt-2">
                                                            <div class="ctr-thsServcActv">
                                                                <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                    <input type="checkbox" name="" id="actvThsShippingServc" class="peer sr-only">
                                                                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="saveThsServc mt-2">
                                                        <button class="btn-sveServc border border-black px-4 py-2 rounded-lg">
                                                            <div class="cBtnSve flex items-center gap-2">
                                                                <div class="icnSve">
                                                                    <span class="icn">
                                                                        <i class="far fa-floppy-disk"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="lbelSave">
                                                                    <div class="tx">
                                                                        <p>Simpan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
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
    {{-- <div class="mdl-confDelCltshSrvc fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <div class="cMdlConfDel rounded-lg p-8 bg-white shadow-sm shadow-black flex flex-col items-center justify-center">
            <div class="icnDel">
                <span class="icn text-3xl text-red-600">
                    <i class="fas fa-circle-exclamation"></i>
                </span>
            </div>
            <div class="warnDel mt-2">
                <div class="txWarn">
                    <p>Konfirmasi untuk menghapus layanan untuk pakaian</p>
                </div>
            </div>
            <div class="confirCancel">
                <div class="cancelDel">
                    
                </div>
                <div class="confirDel">
                    
                </div>
            </div>
        </div>
    </div> --}}
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
    <script src="{{ asset('assets/js/pages/stores/services/addServc.js') }}"></script>
    <script src="{{ asset('assets/js/pages/stores/services/this.js') }}"></script>
    
    <script src="{{ asset('assets/js/pages/stores/services/svK.js') }}"></script>
    <script src="{{ asset('assets/js/pages/stores/services/svU.js') }}"></script>
    <script src="{{ asset('assets/js/pages/stores/services/svM.js') }}"></script>
    {{-- <script>
        document.getElementById('DtUntlMdlCrtePrmo').addEventListener('click', function() {
            document.getElementById('DtUntlMdlCrtePrmo').focus();
            document.getElementById('DtUntlMdlCrtePrmo').click();
        });
    </script> --}}
@endsection
