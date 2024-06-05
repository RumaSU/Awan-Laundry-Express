@extends('layouts.store.index')
@section('titlePage', 'Toko saya')

@section('head-link-field')
    
@endsection

@section('head-style-field')
    
@endsection

@section('main-content-store')
    <div class="ctr-summStore pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
        <div class="summaryStore">
            <div class="ctr-storeProfile p-3 bg-white w-full md:w-fit sm:rounded-md border border-[#9D9D9D] shadow-sm shadow-gray-400 sm:relative">
                <div class="cCStoreProfile">
                    <div class="cCCStoreProfile flex items-center justify-between relative overflow-hidden">
                        <div class="ctr-lftPhoName flex items-center gap-4">
                            <div class="ctr-photoStore">
                                <div class="cPhotoStore w-20 aspect-square rounded-lg p-1.5 border-2 border-[#D9D9D9]">
                                    <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                                </div>
                            </div>
                            <div class="ctr-nameStore w-full md:w-60 xl:w-72">
                                <div class="cNameStore md:-space-y-1">
                                    <div class="nameStore">
                                        <div class="txNmU text-sm md:text-lg font-light line-clamp-1">
                                            <p>
                                                @{{Nama Store}}
                                                @{{Nama Store}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="emailStore">
                                        <div class="txEmU text-xs md:text-sm line-clamp-1">
                                            <p>@{{emailStore@gmail.com}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-rghtShwLsStr absolute  sm:relative top-0 right-0">
                            <div class="ctr-showLstStr">
                                <div class="cShowLstStr-icn">
                                    <div id="icnClSLSt" class="icnshowLstStrs flex items-center justify-center w-10 md:w-14 cursor-pointer aspect-square bg-white border border-[#9D9D9D] rounded-lg relative">
                                        <span class="icn text-gray-700 text-xl md:text-2xl lg:text-3xl transition-all absolute">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ctCCLsSTSnThs" class="ctr-listStore w-full p-2 sm:mt-2 bg-white shadow-lg shadow-black/60 sm:rounded-lg whitespace-nowrap fixed top-0 left-0 z-[60] sm:absolute sm:top-full md:left-auto h-[100vh] sm:h-auto" style="display: none;">
                    <div class="ctr-headListStore p-2 sm:hidden">
                        <div class="cHLStore flex items-center justify-between">
                            <div class="cThX">
                                <div class="thX lg:text-lg">
                                    <strong>Daftar Toko</strong>
                                </div>
                            </div>
                            <div class="clsShwLStr">
                                <div class="icn">
                                    <span id="clckThsCShwStr" class="p-2 cursor-pointer rounded-lg">
                                        <i class="fa-solid fa-x text-lg"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $activeThisStore = "shadow-pink-800 bg-[#FF3377] text-white";
                        $notActiveThisStore = "shadow-black/30 hover:text-white bg-white group-hover/store:bg-[#FF3377] group-hover/store:shadow-pink-800";
                        
                        $activeThisStoreSetting = "text-pink-900 group-hover/settingStore:text-pink-950";
                        $notActiveThisStoreSetting = "text-[#9D9D9D] group-hover/store:text-pink-900 group-hover/store:group-hover/settingStore:text-pink-950";
                    @endphp
                    <div id="cCLsSTrSN" class="cListStore p-2 space-y-1 overflow-y-scroll transition-all duration-500 h-0">
                        <div class="ctr-storeItm block cursor-pointer group/store">
                            <div class="cStoreItm flex justify-between items-center p-2 gap-1.5 rounded-lg shadow-sm transition-all {{$activeThisStore}}">
                                <div class="cCStoreItm flex items-center gap-2">
                                    <div class="lftImgStore">
                                        <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-md shadow-black/50 rounded-md">
                                            <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                class="object-cover object-center">
                                        </div>
                                    </div>
                                    <div class="rghtNameStore md:w-60 xl:w-72 whitespace-normal">
                                        <div class="tx  text-sm md:text-lg font-light line-clamp-2">
                                            <p>
                                                @{{ Awan Laundry Express }}
                                                @{{ Awan Laundry Express }}
                                                @{{ Awan Laundry Express }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="toSettTStore block relative group/settingStore">
                                    <div class="stngTStore">
                                        <div class="icn">
                                            <span class="icnSettings {{$activeThisStoreSetting}} text-lg md:text-xl lg:text-2xl transition-all">
                                                <i class="fa-solid fa-gear"></i>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @for ($i = 0; $i < 10; $i++)
                            <div class="ctr-storeItm block cursor-pointer group/store">
                                <div class="cStoreItm flex justify-between items-center p-2 gap-1.5 rounded-lg shadow-md transition-all {{$notActiveThisStore}}">
                                    <div class="cCStoreItm flex items-center gap-2">
                                        <div class="lftImgStore">
                                            <div class="cImgStr w-14 p-1.5 aspect-square bg-white shadow-sm shadow-black/30 rounded-md">
                                                <img src="{{ asset('assets/components/icon/layer.png') }}" alt=""
                                                    class="object-cover object-center">
                                            </div>
                                        </div>
                                        <div class="rghtNameStore text-sm md:text-lg font-light">
                                            <div class="tx">
                                                <p>Laundry {{$i + 1}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="" class="toSettTStore block relative group/settingStore">
                                        <div class="stngTStore">
                                            <div class="icn">
                                                <span class="icnSettings {{$notActiveThisStoreSetting}} text-lg md:text-xl lg:text-2xl transition-all">
                                                    <i class="fa-solid fa-gear"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="ctrMonyPromo mt-4 flex flex-col lg:flex-row gap-4">
                <div class="ctr-moneyOut bg-white lg:w-fit overflow-hidden rounded-md">
                    <div class="cMoneyOut *:select-none">
                        <div class="ctr-labelMoneyOut p-3 flex items-center gap-4">
                            <div class="ctr-iconOut">
                                <div class="cIconOut flex items-center justify-center w-14 aspect-square bg-[#FF1F00] rounded-lg">
                                    <div class="icnOut">
                                        <span class="icn text-white text-3xl">
                                            <i class="fa-solid fa-arrow-up-long"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-labelOut w-40 md:w-52 xl:w-64">
                                <div class="cLabelOut">
                                    <div class="labelOut -space-y-1 md:-space-y-2 text-[#747474]">
                                        <div class="tx-lblT">
                                            <div class="txT text-xs md:text-sm">
                                                <p>Catatan Keuangan</p>
                                            </div>
                                        </div>
                                        <div class="tx-lblB">
                                            <div class="txB text-base md:text-lg">
                                                <p>Uang Keluar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalMoney flex justify-end">
                            <div class="cTotalMoney w-4/5 bg-[#FF8777] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalMoney text-[#500A00] text-sm md:text-base lg:text-lg text-right font-bold">
                                    <p>Rp @{{800.000}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctr-promo bg-[#B96F00] lg:w-fit overflow-hidden rounded-md shadow-sm hover:shadow-gray-400">
                    <div class="cPromo select-none">
                        <div class="ctr-labelPromo p-3 flex items-center gap-4">
                            <div class="ctr-iconOut">
                                <div class="cIconOut flex items-center justify-center w-14 aspect-square bg-[#EB8E02] rounded-lg">
                                    <div class="icnOut">
                                        <span class="icn text-[#6F4200] text-3xl">
                                            <i class="fa-solid fas fa-bullhorn"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-labelOut w-40 md:w-52 xl:w-64">
                                <div class="cLabelOut">
                                    <div class="labelOut -space-y-2 text-[#FFDFAF]">
                                        <div class="tx-lblT">
                                            <div class="txT text-base md:text-lg">
                                                <p>Promo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalPromo flex justify-end">
                            <div class="cTotalPromo w-4/5 bg-[#FFC978] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalPromo text-[#500A00] text-sm md:text-base lg:text-lg font-bold">
                                    <a href="" class="float-right">
                                        <p>@{{5}} Promo</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('different-content-store')
    
@endsection

@section('script-field')
    <script src="{{asset('assets/js/pages/stores/sLStr.js')}}"></script>
    {{-- <script src="{{asset('assets/js/pages/users/myAccount/autoSwipeSpecial.js')}}"></script> --}}
@endsection