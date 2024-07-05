@extends('layouts.user.index')
@section('titlePage', 'Akun saya')

@section('head-link-field')
    
@endsection

@section('head-style-field')
    <style>
        .lftBubble::before {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-image: url('assets/components/pages/left 05B8FF water.png');
            z-index: 5;
        }

        .cCTransactionItm {
            display: block;
        }
        .txTimeTras {
            font-size: 0.65rem;
            line-height: 0.85rem;
        }
        
        @media only screen and (min-width: 321px) {
            .cCTransactionItm {
                display: flex;
            }
            .txTimeTras {
                font-size: 0.75rem;
                line-height: 1rem;                
            }
        }
    </style>
@endsection

@section('main-content-user')
    <div class="ctr-summUser pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
        <div class="summaryUser">
            <div class="ctr-userProfile p-3 bg-white w-full md:w-fit rounded-md border border-[#9D9D9D] shadow-sm shadow-gray-400">
                <div class="userProfile flex items-center justify-between relative overflow-hidden">
                    <div class="ctr-lftPhoName flex items-center gap-4">
                        <div class="ctr-photoUser">
                            <div class="cPhotoUser w-20 aspect-square rounded-lg p-1.5 border-2 border-[#D9D9D9]">
                                <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                            </div>
                        </div>
                        <div class="ctr-nameUser w-full md:w-60 xl:w-72">
                            <div class="cNameUser md:-space-y-1">
                                <div class="nameUser">
                                    <div class="txNmU text-sm md:text-lg font-light line-clamp-1">
                                        <p>
                                            {{ Auth::user()->UserDetail->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="emailUser">
                                    <div class="txEmU text-xs md:text-sm line-clamp-1">
                                        <p>{{ Auth::user()->email }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-rghtSett absolute  sm:relative top-0 right-0">
                        <div class="ctr-setting">
                            <div class="cSetting">
                                <a href="" class="flex items-center justify-center w-10 md:w-14 aspect-square bg-white border border-[#9D9D9D] rounded-lg">
                                    <div class="icn">
                                        <span class="icnSettings text-[#9D9D9D] text-xl md:text-2xl lg:text-3xl">
                                            <i class="fa-solid fa-gear"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
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
    <div class="ctr-specialForUser mt-10">
        <div class="cSpecialFUser">
            <div class="headSpecial text-xl ml-[10%]">
                <div class="tx text-[#FF3377] italic font-black" style="text-shadow: 0 4px 2px rgba(0, 0, 0, 0.2)">
                    <h2>Spesial Untukmu</h2>
                </div>
            </div>
            <div class="ctr-specialList mt-1 mx-auto w-[95%] h-44 border-[3px] border-gray-400 p-2 rounded-xl" data-carousel="slide">
                <div class="cSpecialList h-full relative" >
                    <div class="ctr-cSpecialList h-full overflow-hidden box-border" >
                        <div class="cLstSpecial flex items-center h-full relative">
                            @php
                                $nowActive = "translate-x-0";
                                $toActive = "translate-x-full";
                                $notActive = "-translate-x-full";
                                
                                $intTo = 8;
                            @endphp
                            @for ($i = 0; $i < $intTo; $i++)
                                <a href="#item-{{$i+1}}" class="ctr-spcItm absolute w-full h-full px-2 transition-all duration-700 {{ ($i === 0) ? $nowActive : (($i === $intTo - 1) ? $notActive : $toActive) }}" data-carousel-item>
                                    <div class="cSpecialItm h-full">
                                        <div class="pctSpc h-full">
                                            <img src="{{asset('assets/img/dumb/imgtemp ' . $i+1 . '.jpg')}}" alt="" class="h-full w-full rounded-xl object-cover object-center">
                                        </div>
                                    </div>
                                </a>
                            @endfor
                        </div>
                    </div>
                    <div class="ctr-nxtBckSpcList text-2xl md:text-4xl">
                        <button type="button" class="ctr-backSpc cursor-pointer bg-gray-400/80 hover:bg-gray-600/80 text-[#3A3A3A] hover:text-[#f0f0f0] p-3 rounded-2xl aspect-square absolute z-50 left-0 top-1/2 -translate-y-1/2" data-carousel-prev>
                            <div class="cBackSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </div>
                        </button>
                        <button type="button" class="ctr-nextSpc cursor-pointer bg-gray-400/80 hover:bg-gray-600/80 text-[#3A3A3A] hover:text-[#f0f0f0] p-3 rounded-2xl aspect-square absolute z-50 right-0 top-1/2 -translate-y-1/2" data-carousel-next>
                            <div class="cNextSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="ctr-transaction mt-8">
        <div class="cTransaction">
            <div class="headTransaction ml-[10%]">
                <div class="tx text-xl font-bold">
                    <h2>Riwayat Transaksi</h2>
                </div>
            </div>
            <div class="ctr-listTransaction mt-4 px-4">
                <div class="cListTransaction space-y-2">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="ctr-transactionItm border-2 border-gray-400 py-4 px-6 rounded-xl shadow-md shadow-gray-400">
                            <div class="cTransactionItm">
                                <div class="ctr-headTrscTimeStatusItm">
                                    <div class="cHeadTrscTimeStatusItm flex items-center justify-between">
                                        <div class="ctr-lftTime">
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
                                                        <div class="txTimeTras text-gray-700">
                                                            <p>@{{25 Mar 2024}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusTrsc px-4 md:px-8 py-2 rounded-xl  border border-black">
                                                <div class="txSt text-xs md:text-sm font-semibold">
                                                    <strong>@{{Selesai}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCTransactionItm gap-6">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageTransaction w-24 aspect-square rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetTransaction w-full">
                                            <div class="cDetTransaction select-none">
                                                <div class="headDetTransaction">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Pemesanan jasa @{{Kiloan dan Satuan}}</h2>
                                                    </div>
                                                </div>
                                                <div class="ctr-listDetTrsc">
                                                    <div class="cListDetTrsc sm:-space-y-1 text-xs sm:text-sm">
                                                        <div class="itm-detTrsc">
                                                            <div class="tx">
                                                                <p>2 Jenis (Kiloan dan Satuan)</p>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detTrsc">
                                                            <div class="tx">
                                                                <p>2 Jenis (Kiloan dan Satuan)</p>
                                                            </div>
                                                        </div>
                                                        <div class="itm-detTrsc">
                                                            <div class="tx">
                                                                <p>2 Jenis (Kiloan dan Satuan)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-fooTrscItm mt-4 md:mt-1">
                                    <div class="cFooTrscItm">
                                        <div class="ctr-lftTPrice flex flex-col sm:flex-row sm:items-center justify-between gap-2 sm:gap-0">
                                            <div class="cTPrice md:-space-y-1 text-sm">
                                                <div class="headTPrice">
                                                    <div class="tx">
                                                        <p>Total Belanja</p>
                                                    </div>
                                                </div>
                                                <div class="cPrice">
                                                    <div class="tx font-bold">
                                                        <p>Rp. @{{21821817257125}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-rghtShwDetTrsc">
                                                <div class="cShwDetTrsc">
                                                    <a href="" class="shwThs block px-4 md:px-8 lg:px-12 py-2 border border-black rounded-xl">
                                                        <div class="tx text-sm text-center sm:text-left font-semibold">
                                                            <p>Lihat Detail</p>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
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

@section('different-content-user')
    <div class="ctr-createOrder">
        <div class="cCreateOrder flex items-center gap-4">
            <div class="ctr-lftCreateOrder md:flex-shrink-0 p-8 md:p-0">
                <div class="cLeftCreateOrder bg-[#05B8FF] xl:w-80 h-60 px-6 pt-6 pb-12 relative overflow-hidden rounded-tl-3xl rounded-br-[6rem] md:rounded-br-[12rem] xl:rounded-br-none transition-all duration-500 shadow-lg shadow-gray-400">
                    {{-- bg-[#05B8FF] bg-[url({{asset('assets/components/pages/left 05B8FF water.png')}})] --}}
                    {{-- style="background-image: url('{{asset('assets/components/pages/left 05B8FF water.png')}}')" --}}
                    <div class="ctr-cLeftCreateOrder z-10 relative">
                        <div class="cCLeftCreateOrder text-white">
                            <div class="ctr-headLeftCreateOrder select-none">
                                <div class="cHeadLeftCreateOrder space-y-4">
                                    <div class="tHCrOrder text-xl font-bold">
                                        <div class="HtxCr">
                                            <h2>BUAT PESANAN?</h2>
                                        </div>
                                    </div>
                                    <div class="txHCrOrder text-xs">
                                        <div class="txCr">
                                            <p>Buatlah pesanan sekarang untuk mengatasi masalah pakaian kotor Anda dengan mudah.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-clickCreateOrder mt-12">
                                <div class="cClickCreateOrder font-bold">
                                    <a href="" class="clCreateOrder block w-fit px-8 py-2 text-sm rounded-xl bg-[#FF3377]">
                                        <div class="txCr">
                                            <p>Buat Pesanan</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctrBgCreateOrder absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 select-none">
                        <div class="cBgCreateOrder">
                            <div class="imageBG w-full h-full">
                                <img src="{{asset('assets/components/pages/left 05B8FF water.png')}}" alt="" class="w-full h-full object-center object-cover scale-[2.75]">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-rghtImgLaundry flex-shrink w-[50rem] relative hidden xl:block">
                <div class="cRghtImgLaundry">
                    <div class="ctr-laundryMachn">
                        <div class="cLaundryMachn">
                            <div class="ctr-cLaundryMachn">
                                <div class="cCLaundryMachn">
                                    {{-- <div class="ctr-imgLaundry">
                                        <div class="cImgLaundry">
                                            <img src="{{asset('assets/components/pages/Layer_x0020_1.png')}}" alt="" class="scale-[0.6]">
                                        </div>
                                    </div> --}}
                                    <div class="ctr-cCLaundryMachn"  data-carousel="slide">
                                        <div class="ctrCC absolute z-10 left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                                            <div class="ctr-listCanDoLaundry w-fit ">
                                                <div class="ctr-imgLaundry flex justify-center select-none">
                                                    <div class="cImgLaundry w-[60%] select-none">
                                                        <img src="{{asset('assets/components/pages/Layer_x0020_1.png')}}" alt="" class="select-none">
                                                    </div>
                                                </div>
                                                <div class="cListCanDoLaundry flex items-center justify-center w-52 aspect-square bg-white rounded-[100%] overflow-hidden absolute -z-10 left-1/2 top-[55%] -translate-x-1/2 -translate-y-[55%] border border-black">
                                                    <div class="ctr-itmCanLaundry scale-[.55] absolute duration-700" data-carousel-item>
                                                        <div class="cItmCanLaundry">
                                                            <div class="imageItem">
                                                                <img src="{{asset('assets/components/pages/shirt2.avif')}}" alt="" class="object-cover object-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-itmCanLaundry scale-[.55] absolute duration-700 translate-x-full" data-carousel-item>
                                                        <div class="cItmCanLaundry">
                                                            <div class="imageItem">
                                                                <img src="{{asset('assets/components/pages/shirt2.avif')}}" alt="" class="object-cover object-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-itmCanLaundry scale-[.55] absolute duration-700 translate-x-full" data-carousel-item>
                                                        <div class="cItmCanLaundry">
                                                            <div class="imageItem">
                                                                <img src="{{asset('assets/components/pages/shirt3.webp')}}" alt="" class="object-cover object-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ctr-itmCanLaundry scale-[.55] absolute duration-700 -translate-x-full" data-carousel-item>
                                                        <div class="cItmCanLaundry">
                                                            <div class="imageItem">
                                                                <img src="{{asset('assets/components/pages/packClothes.png')}}" alt="" class="object-cover object-center">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="ctr-whatThisImgCanDoLaundry border border-black absolute z-10 left-1/2 top-[125%] -translate-x-1/2 -translate-y-[125%]">
                                                <div class="cWhatThisImgCanDoLaundry">
                                                    <div class="txWhtThis" aria-current="true" data-carousel-slide-to="0">
                                                        <p>Pakaian</p>
                                                    </div>
                                                    <div class="txWhtThis" aria-current="false" data-carousel-slide-to="1">
                                                        <p>Pakaian 2</p>
                                                    </div>
                                                    <div class="txWhtThis" aria-current="false" data-carousel-slide-to="2">
                                                        <p>Pakaian 3</p>
                                                    </div>
                                                    <div class="txWhtThis" aria-current="false" data-carousel-slide-to="3">
                                                        <p>Pakaian 4</p>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="ctr-chevNxtBck w-full h-full">
                                                <button type="button" class="ctr-nxtImgCanDoLaundry absolute left-0 top-1/2 -translate-y-1/2 z-10 w-12 aspect-square rounded-[100%] border border-black" data-carousel-prev>
                                                    <div class="cNxtImgCanDoLaundry">
                                                        <span class="icn-chevLft">
                                                            <i class="fa-solid fa-chevron-left"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                                <button type="button" class="ctr-bckImgCanDoLaundry absolute right-0 top-1/2 -translate-y-1/2 z-10 w-12 aspect-square rounded-[100%] border border-black" data-carousel-next>
                                                    <div class="cBckImgCanDoLaundry">
                                                        <span class="icn-chevLft">
                                                            <i class="fa-solid fa-chevron-right"></i>
                                                        </span>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ctrBGLaundryMachn px-6 pt-6 pb-12 h-60 select-none selectDisable bg-[#05B8FF] relative overflow-hidden rounded-br-[12rem] shadow-lg shadow-gray-400">
                                <div class="cBGLaundryMachn">
                                    <div class="ctr-cBgLaundryMachn absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
                                        <div class="cCBgLaundryMachn">
                                            <div class="imageBG w-full h-full">
                                                <img src="{{asset('assets/components/pages/right 05B8FF water.png')}}" alt="" class="w-full h-full object-center object-cover scale-[2.25]">
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
    </div>
@endsection

@section('script-field')
    {{-- <script src="{{asset('assets/js/pages/users/myAccount/autoSwipeSpecial.js')}}"></script> --}}
@endsection