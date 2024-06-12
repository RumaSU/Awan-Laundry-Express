@extends('layouts.store.index')
@section('titlePage', 'Toko - Pesanan')

@section('head-link-field')

@endsection

@section('head-style-field')
    <style>
        /* .cCOrdersItm {
            display: block;
        } */
        .ctr-headTrscTimeStatusItm .cHeadTrscTimeStatusItm {
            align-items: stretch;
            flex-direction: column;
        }

        .txTimeTras {
            font-size: 0.65rem;
            line-height: 0.85rem;
        }

        .addColonEndElem {
            position: relative;
        }
        .addColonEndElem::after {
            position: absolute;
            content: ":";
            right: 0;
            top: 0;
            /* margin-left: 0.15rem; */
            /* color: inherit; */
        }

        @media only screen and (min-width: 321px) {
            /* .cCOrdersItm {
                display: flex;
            } */
            .txTimeTras {
                font-size: 0.75rem;
                line-height: 1rem;
            }
        }
        @media only screen and (min-width: 425px) {
            /* .cCOrdersItm {
                display: flex;
            } */
            .ctr-headTrscTimeStatusItm .cHeadTrscTimeStatusItm {
                align-items: center;
                flex-direction: row;
            }
            .txTimeTras {
                font-size: 0.75rem;
                line-height: 1rem;
            }
        }
    </style>
@endsection

@section('main-content-store')
    {{-- <div class="ctr-summStore pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
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
            <div class="ctrMoneyOutIn mt-4 flex flex-col lg:flex-row gap-4">
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
                <div class="ctr-moneyIn bg-white lg:w-fit overflow-hidden rounded-md">
                    <div class="cMoneyIn *:select-none">
                        <div class="ctr-labelMoneyIn p-3 flex items-center gap-4">
                            <div class="ctr-iconIn">
                                <div class="cIconIn flex items-center justify-center w-14 aspect-square bg-[#0099FF] rounded-lg">
                                    <div class="icnIn">
                                        <span class="icn text-white text-3xl">
                                            <i class="fa-solid fa-arrow-down-long"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-labelIn w-40 md:w-52 xl:w-64">
                                <div class="cLabelIn">
                                    <div class="labelIn -space-y-1 md:-space-y-2 text-[#747474]">
                                        <div class="tx-lblT">
                                            <div class="txT text-xs md:text-sm">
                                                <p>Catatan Keuangan</p>
                                            </div>
                                        </div>
                                        <div class="tx-lblB">
                                            <div class="txB text-base md:text-lg">
                                                <p>Uang Masuk</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalMoney flex justify-end">
                            <div class="cTotalMoney w-4/5 bg-[#8DCCF7] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalMoney text-[#0f283f] text-sm md:text-base lg:text-lg text-right font-bold">
                                    <p>Rp @{{800.000}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-promoStoreHv mt-4">
                <div class="cPromoStoreHv">
                    <div class="ctr-promo bg-[#B96F00] overflow-hidden rounded-md shadow-sm hover:shadow-gray-400">
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
    </div> --}}

    <div class="ctr-orders mt-8">
        <div class="cOrders">
            <div class="ctr-headOrders">
                <div class="cHeadOrders">
                    <div class="titleOrders ml-[3%] md:ml-[7%]">
                        <div class="tx text-xl font-bold">
                            <h2>Daftar Pesanan Laundry</h2>
                        </div>
                    </div>
                    <div class="ctr-listFilterOrders mt-4 ml-[2%]">
                        <div class="cListFilterOrders selectDisable flex flex-wrap md:flex-nowrap items-center gap-2 font-bold">
                            <div class="ctr-filterItm shrink-0">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterOrders" id="filterItmNewOrders" class="peer/NewOrders hidden sr-only" checked>
                                    <label for="filterItmNewOrders" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/NewOrders:bg-[#FF3377] peer-checked/NewOrders:text-white peer-checked/NewOrders:border-pink-900">
                                        <div class="cFNewOrders">
                                            <div class="tx">Pesanan Baru</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm shrink-0">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterOrders" id="filterItmDoneOrders" class="peer/DoneOrders hidden sr-only">
                                    <label for="filterItmDoneOrders" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/DoneOrders:bg-[#FF3377] peer-checked/DoneOrders:text-white peer-checked/DoneOrders:border-pink-900">
                                        <div class="cFDoneOrders">
                                            <div class="tx">Selesai</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm shrink-0">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterOrders" id="filterItmPieceOrders" class="peer/PieceOrders hidden sr-only">
                                    <label for="filterItmPieceOrders" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/PieceOrders:bg-[#FF3377] peer-checked/PieceOrders:text-white peer-checked/PieceOrders:border-pink-900">
                                        <div class="cFPieceOrders">
                                            <div class="tx">Diproses</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm shrink-0">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterOrders" id="filterItmShippingOrders" class="peer/ShippingOrders hidden sr-only">
                                    <label for="filterItmShippingOrders" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/ShippingOrders:bg-[#FF3377] peer-checked/ShippingOrders:text-white peer-checked/ShippingOrders:border-pink-900">
                                        <div class="cFShippingOrders">
                                            <div class="tx">Dikirim</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm shrink-0">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterOrders" id="filterItmRejectedOrders" class="peer/RejectedOrders hidden sr-only">
                                    <label for="filterItmRejectedOrders" class="block cursor-pointer border px-3 md:px-5 xl:px-7 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/RejectedOrders:bg-[#FF3377] peer-checked/RejectedOrders:text-white peer-checked/RejectedOrders:border-pink-900">
                                        <div class="cFRejectedOrders">
                                            <div class="tx">Ditolak</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-listOrders mt-4 px-4">
                <div class="cListOrders space-y-2">
                    @php
                        $listOrder = rand(0, 8);
                    @endphp
                    @if ($listOrder > 0)
                        @for ($i = 0; $i < $listOrder; $i++)
                            @php
                                $uuidThis = Str::uuid();
                            @endphp
                            
                            <div class="ctr-OrdersItm border-2 border-gray-400 py-4 px-6 rounded-xl shadow-md shadow-gray-400" data-orderId="{{$uuidThis}}">
                                <div class="cOrdersItm">
                                    <div class="ctr-headTrscTimeStatusItm">
                                        <div class="cHeadTrscTimeStatusItm flex justify-between gap-2">
                                            <div class="ctr-lftTime shrink-0">
                                                <div class="cLftTime flex items-center gap-4 md:gap-6">
                                                    <div class="icn">
                                                        <span class="icn-bag text-2xl md:text-3xl text-[#C00040]">
                                                            <i class="fa-solid fa-bag-shopping"></i>
                                                        </span>
                                                    </div>
                                                    <div class="ctr-timeTrsc">
                                                        <div class="cTimeTrsc">
                                                            <div class="txH text-sm">
                                                                <strong>Cuci Pakaian</strong>
                                                            </div>
                                                            <div class="txTimeTras font-light text-gray-700">
                                                                <p>@{{25 Mar 2024}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-rghtStatus selectDisable" data-orderId="{{$uuidThis}}">
                                                <div class="cStatusTrsc flex items-center gap-2 text-xs md:text-sm">
                                                    @php
                                                        $stAccRejc = rand(0, 1);
                                                    @endphp
                                                    @if ($stAccRejc)
                                                        <div class="cSRejectTrsc cursor-pointer text-white px-4 md:px-8 py-2 rounded-lg bg-[#C00040] transition-all duration-[400ms] hover:opacity-80">
                                                            <div class="txSt">
                                                                <strong>Tolak</strong>
                                                            </div>
                                                        </div>
                                                        <div class="cSAccptTrsc cursor-pointer text-white px-4 md:px-8 py-2 rounded-lg bg-[#FF3377] transition-all duration-[400ms] hover:opacity-80">
                                                            <div class="txSt">
                                                                <strong>Terima</strong>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="cSDoneTrsc px-4 md:px-8 py-2 rounded-xl border border-black">
                                                            <div class="txSt text-xs md:text-sm font-semibold">
                                                                <strong>@{{Selesai}}</strong>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ctr-cTrscItm mt-4">
                                        <div class="cCOrdersItm space-y-2">
                                            <div class="ctr-userOrder">
                                                <div class="cUserOrder flex items-center gap-2 selectDisable">
                                                    <div class="cImgUsr shrink-0">
                                                        <div class="imgUsr w-8 md:w-10 aspect-square rounded-[100%] overflow-hidden">
                                                            <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                        </div>
                                                    </div>
                                                    <div class="cNameUsr break-all">
                                                        <div class="txNm line-clamp-1 text-xs md:text-sm">
                                                            <p>Nama User</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-userDetOrder w-full">
                                                <div class="cDetOrders select-none">
                                                    <div class="headDetOrders break-all">
                                                        <div class="txHDet text-sm md:text-base xl:text-lg font-semibold line-clamp-2" style="line-height: 1.15rem;">
                                                            <h2>Pemesanan jasa @{{Kiloan dan Satuan}}Pemesanan jasa @{{Kiloan dan Satuan}}Pemesanan jasa @{{Kiloan dan Satuan}}Pemesanan jasa @{{Kiloan dan Satuan}}</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ctr-fooTrscItm mt-4 md:mt-2">
                                        <div class="cFooTrscItm">
                                            <div class="ctr-lftTPrice flex flex-col sm:flex-row sm:items-center justify-between gap-2 sm:gap-0">
                                                <div class="cTPrice md:-space-y-1 text-sm">
                                                    <div class="headTPrice">
                                                        <div class="tx">
                                                            <p>Total Belanja</p>
                                                        </div>
                                                    </div>
                                                    <div class="cPrice">
                                                        <div class="tx text-sm md:text-lg font-bold">
                                                            <p>Rp. @{{21821817257125}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ctr-rghtShwDetTrsc">
                                                    <div class="cShwDetTrsc cursor-pointer">
                                                        <button class="shwThsDetTrsc block px-4 md:px-6 lg:px-10 py-1.5 border border-black rounded-xl">
                                                            <div class="tx text-sm text-center sm:text-left font-semibold">
                                                                <p>Lihat Detail</p>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @else
                        <div class="ctr-OrdersItm border-2 border-gray-400 py-4 px-6 rounded-xl shadow-md shadow-gray-400">
                            <div class="cOrdersItm flex flex-col items-center justify-center gap-6">
                                <div class="ctr-imgNoOrder relative">
                                    <div class="cImgNoOrder flex items-center justify-center h-36 bg-gray-200 rounded-full aspect-square">
                                        <div class="imgNoOrder">
                                            <div class="icnBagWsClths">
                                                <span class="icnBag text-8xl text-black/40">
                                                    <i class="fa-solid fa-bag-shopping"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cXImgNoOrder flex items-center justify-center absolute -right-[4%] -bottom-[4%] translate-x-[4%] translate-y-[4%] rounded-[100%] p-2 bg-white">
                                        <div class="xNoOrder">
                                            <div class="icnXClths">
                                                <span class="icnX text-[2.5rem] leading-4 text-black/40">
                                                    <i class="fa-solid fa-circle-minus"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-txNoOrder">
                                    <div class="cTxNoOrder">
                                        <div class="txNoOrder flex items-center gap-1 text-black/60">
                                            No Order <div class="text-[#C00040]">Today</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
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
    {{-- <div class="ctr-shwMdlDetOrder w-full p-2 md:w-3/4 max-w-[1280px] h-[100vh] md:h-[80vh] bg-pink-200 transition-all fixed z-[100] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 border border-black"> --}}
    <div class="ctr-shwMdlDetOrder p-2 h-[100vh] md:h-[80vh] overflow-hidden bg-white md:rounded-2xl md:shadow-lg md:shadow-black/50 transition-all fixed z-[100] hidden w-0 md:w-[0]" style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="cShwMdlDetOrder p-1 h-full relative">
            <div class="icnClsMdlDetOrder">
                <div id="icnClsXMdlDetThsOrder" class="icnClsX rounded-lg py-2 px-3 cursor-pointer absolute z-[2] top-0 right-0 bg-white border border-black">
                    <span class="icn text-xl">
                        <i class="fa-solid fa-x"></i>
                    </span>
                </div>
            </div>
            <div class="headTxMdlDetOrder sticky top-0 bg-white p-2 border-b-2">
                <div class="txHDtOrder font-bold text-xl md:text-2xl">
                    <h2>Detail Transaksi</h2>
                </div>
            </div>
            <div class="ctr-detThsOrder h-full overflow-hidden">
                <div class="cDetThsOrder h-full flex gap-2">
                    @php
                        // do random what order is kilos or items or both
                        // looping one of them must have true
                        do {
                            $whatOrder = [
                                'kilos' => (bool) rand(0, 1),
                                'items' => (bool) rand(0, 1)
                            ];
                        } while(($whatOrder['kilos'] == false) && ($whatOrder['items'] == false));
                        
                        // Do random quality doing double order
                        $qualDoubleOrder = mt_rand() / mt_getrandmax();
                        // Checking prob if double order when kilos is true then doing to items if false
                        ((($whatOrder['kilos']) && !($whatOrder['items'])) && ($qualDoubleOrder < 0.3)) ? $whatOrder['items'] = true : $whatOrder['items'];
                        // if ((($whatOrder['kilos']) && !($whatOrder['items'])) && ($qualDoubleOrder < 0.3)) {
                        //     $whatOrder['items'] = true;
                        // }
                        
                        // Do random quality doing double order
                        $qualDoubleOrder = mt_rand() / mt_getrandmax();
                        // Checking prob if double order when items is true then doing to kilos if false
                        ((($whatOrder['items']) && !($whatOrder['kilos'])) && ($qualDoubleOrder < 0.2)) ? $whatOrder['kilos'] = true : $whatOrder['kilos'];
                        // if ((($whatOrder['items']) && !($whatOrder['kilos'])) && ($qualDoubleOrder < 0.2)) {
                        //     $whatOrder['kilos'] = true;
                        // }
                    @endphp
                    {{-- <div class="ctr-mdlDetOrder h-full w-3/5 bg-white p-2 border border-black"> --}}
                    <div class="ctr-mdlDetOrder h-full w-full bg-white p-2 pb-12">
                        <div class="cMdlDetOrder h-full p-2 pb-4 overflow-y-scroll">
                            {{-- <div class="headTxMdlDetOrder sticky top-0 bg-white p-2 border-b-2">
                                <div class="txHDtOrder font-bold text-xl md:text-2xl">
                                    <h2>Detail Transaksi</h2>
                                </div>
                            </div> --}}
                            <div class="cLstSecMdlTrscDet px-4">
                                {{-- Section Transaction Status --}}
                                <div class="sec-mdlTrscStatus mt-3">
                                    <div class="hMdlTrscStatus flex items-center gap-2">
                                        <div class="txMdlTSts text-lg md:text-xl">
                                            <strong>Pesanan</strong>
                                        </div>
                                        <div class="stTrscSts px-4 py-1 text-sm rounded-lg border border-black">
                                            <div class="txThs">
                                                <p>@{{Selesai}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ctr-detMdlTrscSt pl-4 mt-2">
                                        <div class="cDetMdlTrscSt space-y-1 text-sm sm:text-[0.925rem]">
                                            @php
                                                $TMP_RAND_INV = Str::uuid();
                                                $EXPLD_RINV = explode('-', $TMP_RAND_INV);
                                                $END_EXPLD_RINV = end($EXPLD_RINV);
                                                $TMP_RINV_CHOOSED = (strlen($END_EXPLD_RINV) > 6) ? substr($END_EXPLD_RINV, 0, 5) : $END_EXPLD_RINV;
                                                $TMP_TIME_ORD = Carbon\Carbon::now()->format('Ymd');
                                            @endphp
                                            <div class="itmInvDetTrsc flex flex-col sm:flex-row justify-between">
                                                <div class="lblInvDetTrsc shrink-0">
                                                    <div class="tx">
                                                        <p>No. Invoice</p>
                                                    </div>
                                                </div>
                                                <div class="vInvDetTrsc break-all">
                                                    <div class="tx font-semibold">
                                                        <p>TRA/{ {{ $TMP_TIME_ORD }} }/PAL/{ {{$TMP_RINV_CHOOSED}} }</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="itmDateDetTrsc flex flex-col min-[410px]:flex-row justify-between">
                                                <div class="lblDateDetTrsc shrink-0">
                                                    <div class="tx">
                                                        <p>Tanggal Transaksi</p>
                                                    </div>
                                                </div>
                                                <div class="vDateDetTrsc">
                                                    <div class="tx font-semibold">
                                                        <p>{{Carbon\Carbon::now()->format('d M Y')}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Section Transaction Detail --}}
                                <div class="sec-mdlTrscDetail mt-3">
                                    <div class="hMdlTrscDetail flex items-center justify-between gap-2 text-xl">
                                        <div class="txHMdlTDtl shrink-0 text-lg md:text-xl">
                                            <strong>Detail Pesanan</strong>
                                        </div>
                                        <div class="hStrTrscDetail w-2/5">
                                            <a href="" class="flex items-center gap-1 break-all transition-all hover:opacity-80">
                                                <p class="line-clamp-1">adaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaadaada</p>
                                                <span class="icnTChvRght text-2xl">
                                                    <i class="icnChvR fa-solid fa-chevron-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ctr-detLstMdlTrsc p-2 sm:p-4 mt-2 rounded-xl border border-black text-sm sm:text-[0.925rem]">
                                        <div class="cDetLstMdlTrsc space-y-6">
                                            {{-- Content Detail Transaksi Kiloan --}}
                                            @if ($whatOrder['kilos'])
                                                <div class="ctr-itmDetTrsc">
                                                    @php
                                                        $TMP_VAL_KILOS = rand(10, 100) / 10;
                                                        $TMP_VAL_PRCKILOS = rand(80, 120) * 100;
                                                        $totalPriceTransaction += $TMP_VAL_KILOS * $TMP_VAL_PRCKILOS;
                                                    @endphp
                                                    <div class="cItmDetTrsc">
                                                        <div class="ctr-hTypeDetTrsc">
                                                            <div class="cHTypeDetTrsc flex gap-2">
                                                                <i class="lstIcn w-4 h-2 bg-gray-300 rounded-lg mt-2"></i>
                                                                <div class="cCHTpDetTrsc w-full flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                                                    <div class="ctr-typeDetTrsc shrink-0">
                                                                        <div class="cTpDetTrsc leading-[1.35rem]">
                                                                            <div class="lblTpDetTrsc">
                                                                                <div class="txLb">
                                                                                    <strong>Kiloan</strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="descTpDetTrsc">
                                                                                <div class="txD">
                                                                                    <strong>Pesanan Kiloan</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ctr-tlItmDetTrsc sm:w-3/5 break-all">
                                                                        <div class="cTlItmDetTrsc leading-[1.35rem] sm:text-right">
                                                                            <div class="lblTlItmDetTrsc">
                                                                                <div class="txLbl">
                                                                                    <p>Total Harga</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vlTlItmDetTrsc line-clamp-1">
                                                                                <div class="txVl">
                                                                                    <strong>Rp. { {{ number_format($TMP_VAL_KILOS * $TMP_VAL_PRCKILOS) }} }</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctr-lstTypeDetTrsc mt-2 pl-4">
                                                            <div class="cLstTpDetTrsc">
                                                                <div class="ctr-itmTpDetTrsc">
                                                                    <div class="cItmTpDetTrsc flex items-center gap-2">
                                                                        <i class="lstIcn w-3 aspect-square bg-gray-300 rounded-lg"></i>
                                                                        <div class="cCItmTpDetTrsc w-full flex flex-col sm:flex-row sm:gap-2 justify-between break-all">
                                                                            <div class="lblItmDetTrsc break-all">
                                                                                <div class="vlItm text-gray-700">
                                                                                    <div class="txVl line-clamp-1">
                                                                                        <p>{ {{$TMP_VAL_KILOS}} }Kg &times; Rp. { {{ number_format($TMP_VAL_PRCKILOS) }} }</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="tlItmDetTrsc text-gray-700">
                                                                                <div class="valTlItmDetTrsc">
                                                                                    <div class="txTl line-clamp-1">
                                                                                        <p>Rp. { {{ number_format($TMP_VAL_KILOS * $TMP_VAL_PRCKILOS) }} }</p>
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
                                            @endif
                                            @if ($whatOrder['items'])
                                                <div class="ctr-itmDetTrsc">
                                                    @php
                                                        $TMP_TL_ORD_ITM = 0;
                                                        $tempRandTotalTrsc = rand(1, 10);
                                                        $lstDetTrscItems = [];
                                                        
                                                        for ($lLI = 0; $lLI < $tempRandTotalTrsc; $lLI++ ) {
                                                            $tempTotalVal = rand(1, 20);
                                                            $tempPricePerItmVal = rand(50, 160) * 100;
                                                            
                                                            $TMP_TL_ORD_ITM += $tempTotalVal * $tempPricePerItmVal;
                                                            
                                                            array_push($lstDetTrscItems, [
                                                                'totallOrdItm' => $tempTotalVal,
                                                                'priceOrdPItm' => $tempPricePerItmVal
                                                            ]);
                                                        }
                                                        
                                                        $totalPriceTransaction += $TMP_TL_ORD_ITM;
                                                    @endphp
                                                    <div class="cItmDetTrsc">
                                                        <div class="ctr-hTypeDetTrsc">
                                                            <div class="cHTypeDetTrsc flex gap-2">
                                                                <i class="lstIcn w-4 h-2 bg-gray-300 rounded-lg mt-2"></i>
                                                                <div class="cCHTpDetTrsc w-full flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                                                                    <div class="ctr-typeDetTrsc shrink-0">
                                                                        <div class="cTpDetTrsc leading-[1.35rem]">
                                                                            <div class="lblTpDetTrsc">
                                                                                <div class="txLb">
                                                                                    <strong>Satuan</strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="descTpDetTrsc">
                                                                                <div class="txD">
                                                                                    <strong>Total Pesanan Satuan</strong>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vlTpDetTrsc">
                                                                                <div class="txVl">
                                                                                    <strong> { {{ $tempRandTotalTrsc }} } Jenis</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="ctr-tlItmDetTrsc sm:w-3/5 break-all">
                                                                        <div class="cTlItmDetTrsc leading-[1.35rem] sm:text-right">
                                                                            <div class="lblTlItmDetTrsc">
                                                                                <div class="txLbl">
                                                                                    <p>Total Harga</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="vlTlItmDetTrsc line-clamp-1">
                                                                                <div class="txVl">
                                                                                    <strong>Rp. { {{ number_format($TMP_TL_ORD_ITM) }} }</strong>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ctr-lstTypeDetTrsc mt-2 pl-4">
                                                            <div class="cLstTpDetTrsc max-sm:space-y-2 sm:space-y-1">
                                                                @foreach ($lstDetTrscItems as $idx => $valOrdItm)
                                                                    <div class="ctr-itmTpDetTrsc max-sm:border-b-2 max-sm:border-gray-200">
                                                                        <div class="cItmTpDetTrsc flex items-center gap-2">
                                                                            <i class="lstIcn w-3 aspect-square bg-gray-300 rounded-lg"></i>
                                                                            <div class="cCItmTpDetTrsc w-full flex flex-col min-[410px]:flex-row min-[410px]:gap-2 justify-between break-all">
                                                                                <div class="lblItmDetTrsc">
                                                                                    <div class="lblItm">
                                                                                        <div class="txLb">
                                                                                            <strong>Pakaian {{$idx+1}}</strong>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vlItm text-gray-700">
                                                                                        <div class="txVl line-clamp-1">
                                                                                            <p> { {{$valOrdItm['totallOrdItm']}} } &times; Rp. { {{ number_format($valOrdItm['priceOrdPItm']) }} }</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="tlItmDetTrsc text-gray-700">
                                                                                    <div class="txTl line-clamp-1">
                                                                                        <p>Rp. { {{ number_format($valOrdItm['totallOrdItm'] * $valOrdItm['priceOrdPItm']) }} }</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            {{-- Content Detail Transaksi Satuan --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- Section Shipping Info --}}
                                <div class="sec-mdlTrscShpngInfo mt-3">
                                    <div class="hMdlTrscShpngInfo flex items-center gap-2">
                                        <div class="txMdlTSts text-lg md:text-xl">
                                            <strong>Info Pengiriman</strong>
                                        </div>
                                    </div>
                                    <div class="ctr-detLstMdlTrscShpInfo px-4 mt-2 text-sm sm:text-[0.925rem]">
                                        <div class="cDetLstMdlTrscShpInfo space-y-2 break-all">
                                            <div class="ctr-itmSecUsrInfo">
                                                <div class="cItmSecUsrNm flex gap-1.5">
                                                    <div class="lblUserName hidden sm:block shrink-0 w-1/3 addColonEndElem">
                                                        <div class="txLblTp">
                                                            <p>Pembeli</p>
                                                        </div>
                                                    </div>
                                                    <div class="valUserName w-full md:w-1/3">
                                                        <div class="txVlTpDv line-clamp-1">
                                                            <p>Anoanoiengonoqwe</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-itmSecTypeDeliv">
                                                <div class="cItmSecTpDeliv flex gap-1.5">
                                                    <div class="lblTpDeliv hidden sm:block shrink-0 w-1/3 addColonEndElem">
                                                        <div class="txLblTp">
                                                            <p>Jenis Pengiriman</p>
                                                        </div>
                                                    </div>
                                                    <div class="valTpDeliv w-full">
                                                        <div class="txVlTpDv">
                                                            <p>Antar Jemput</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-itmSecAddress">
                                                <div class="cItmSecAddrss flex gap-1.5">
                                                    <div class="lblAddrss hidden sm:block shrink-0 w-1/3 addColonEndElem">
                                                        <div class="txLblTp">
                                                            <p>Alamat</p>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-lstValAddrss">
                                                        <div class="cLstValAddrss">
                                                            <div class="ctr-itmValRcvrAddrss">
                                                                <div class="cItmValRcvrAddrss">
                                                                    <div class="txItmVl">
                                                                        <strong>@{{Nama Orang}}</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctr-itmValPhnNmbrAddrss">
                                                                <div class="cItmValPhnNmbrAddrss">
                                                                    <div class="txItmVl">
                                                                        <p>@{{0254874875416}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctr-itmValDetlAddrss mt-2">
                                                                <div class="cItmValDetlAddrss">
                                                                    <div class="txItmVl">
                                                                        <p>Alamat ini</p>
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
                                {{-- Section Payment Detail --}}
                                <div class="sec-mdlTrscDetailPayment mt-3">
                                    <div class="hMdlTrscDetailPayment flex items-center justify-between gap-2 text-xl">
                                        <div class="txHMdlTDtlPaymn shrink-0 text-lg md:text-xl">
                                            <strong>Rincian Pembayaran</strong>
                                        </div>
                                    </div>
                                    <div class="ctr-detLstMdlTrscPaymn sm:pl-8 sm:pr-4 mt-2">
                                        <div class="cDetLstMdlTrscPaymn space-y-4 text-sm sm:text-[0.925rem]">
                                            @php
                                                $randMtMax = mt_getrandmax();
                                                $randMtMaxLength = Str::length($randMtMax);
                                            @endphp
                                            <div class="ctr-itmDetTrscPaymn">
                                                <div class="cItmDetTrscPaymn flex flex-col sm:flex-row sm:items-center justify-between sm:gap-2">
                                                    <div class="lblMethodDetTrascPaymn shrink-0">
                                                        <div class="txLb">
                                                            <p>Metode Pembayaran</p>
                                                        </div>
                                                    </div>
                                                    <div class="valMethodDetTrascPaymn sm:w-3/5 break-all">
                                                        <div class="valMthd leading-[1.35rem] sm:text-right">
                                                            <p>@{{BCA}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-itmDetTrscPaymn">
                                                <div class="cItmDetTrscPaymn">
                                                    <div class="ctr-lstTlPrcDetTrscPaymn">
                                                        <div class="cLstTlPrcDTrsP space-y-2">
                                                            <div class="ctr-itmTlPrcsDTrsP">
                                                                <div class="cItmTlPrcsDTrsP flex flex-col min-[410px]:flex-row min-[410px]:gap-2 justify-between break-all">
                                                                    <div class="lblPrcDTrsP shrink-0">
                                                                        <div class="txLb">
                                                                            <p>Total Harga (@{{2}} Layanan)</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="valPrcDTrsP sm:w-3/5 break-all">
                                                                        <div class="valMthd leading-[1.35rem] sm:text-right">
                                                                            <p>Rp. { {{ number_format($totalPriceTransaction) }} }</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctr-itmTlPrcsDTrsP">
                                                                <div class="cItmTlPrcsDTrsP flex flex-col min-[410px]:flex-row min-[410px]:gap-2 justify-between break-all">
                                                                    <div class="lblPrcDTrsP shrink-0">
                                                                        <div class="txLb">
                                                                            <p>Total Ongkos Kirim</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="valPrcDTrsP sm:w-3/5 break-all">
                                                                        <div class="valMthd leading-[1.35rem] sm:text-right">
                                                                            <p>Rp. { {{ number_format($randShpp) }} }</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ctr-itmTlPrcsDTrsP">
                                                                <div class="cItmTlPrcsDTrsP flex flex-col min-[410px]:flex-row min-[410px]:gap-2 justify-between break-all">
                                                                    <div class="lblPrcDTrsP shrink-0">
                                                                        <div class="txLb">
                                                                            <p>Diskon ({ {{ $getDiscountTransaction * 100 }} }&percnt;)</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="valPrcDTrsP sm:w-3/5 break-all">
                                                                        <div class="valMthd leading-[1.35rem] sm:text-right">
                                                                            <p>- Rp. { {{ number_format(($totalPriceTransaction + $randShpp) * $getDiscountTransaction) }} }</p>
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
                                    <div class="ctr-detTotlTransaction mt-8 pr-4">
                                        <div class="cDetTotlTransaction flex flex-col sm:flex-row sm:items-center justify-between gap-2 md:text-lg">
                                            <div class="lblPrcDTrsP shrink-0">
                                                <div class="txLb">
                                                    <strong>Total Pembayaran</strong>
                                                </div>
                                            </div>
                                            <div class="valPrcDTrsP sm:w-3/5 break-all max-sm:rounded-xl max-sm:border max-sm:border-black max-sm:p-4">
                                                <div class="valMthd leading-[1.35rem] sm:text-right">
                                                    <strong>Rp. { {{ number_format(($totalPriceTransaction + $randShpp) - (($totalPriceTransaction + $randShpp) * $getDiscountTransaction)) }} }</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Section reject accept --}}
                                <div class="sec-acRjThsOrder my-3">
                                    <div class="ctr-acRjThsOrder">
                                        <div class="cAcRjThsOrder text-center max-[568px]:space-y-2 min-[568px]:flex min-[568px]:flex-row-reverse min-[568px]:gap-2">
                                            <div class="ctr-accThsOrder">
                                                <div class="cAccThsOrder">
                                                    <div class="btn-clkAccOrd cursor-pointer text-white px-8 py-2 rounded-lg bg-[#FF3377] transition-all duration-[400ms] hover:opacity-80">
                                                        <div class="txL">
                                                            <strong>Terima</strong>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-rjcThsOrder">
                                                <div class="cRjcThsOrder">
                                                    <div class="btn-clkRjcOrd cursor-pointer text-white px-8 py-2 rounded-lg bg-[#C00040] transition-all duration-[400ms] hover:opacity-80">
                                                        <div class="txL">
                                                            <strong>Tolak</strong>
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
                    <div class="ctr-mdlWhsDetOrder hidden border border-black">
                        <div class="cMdlWhsDetOrder border border-black">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-field')
    <script src="{{asset('assets/js/pages/stores/orders/trs.js')}}"></script>
    <script src="{{asset('assets/js/pages/stores/orders/mdOrd.js')}}"></script>
@endsection
