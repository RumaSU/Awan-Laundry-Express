@extends('layouts.user.index')
@section('titlePage', 'Akun - Promo')

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
        .btnFilterItmActive {
            background-color: #FF3377;
            color: white;
            border-color: #831843;
        }
        .btnFilterItmNotActive {
            border-color: #9CA3AF;
        }
        .btnFilterItmNotActive:hover {
            background-color: #FF3377;
            color: white;
            border-color: #831843;
        }
        
        .cCPromoItm {
            display: block;
        }
        .cCPromoItm .imagePromo {`
            aspect-ratio: 16 / 9;
        }
        .txTimeTras {
            font-size: 0.65rem;
            line-height: 0.85rem;
        }
        
        @media only screen and (min-width: 475px) {
            .cCPromoItm {
                display: flex;
            }
            .cCPromoItm .imagePromo {
                width: 6rem;
                aspect-ratio: 1 / 1;
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
    
    <div class="ctr-promo mt-8">
        <div class="cPromo">
            <div class="ctr-headPromo">
                <div class="cHeadPromo">
                    <div class="titlePromo ml-[10%]">
                        <div class="tx text-xl font-bold">
                            <h2>Promo</h2>
                        </div>
                    </div>
                    <div class="ctr-listFilterPromo mt-4 ml-[5%]">
                        <div class="cListFilterPromo selectDisable flex flex-wrap items-center gap-4  font-bold">
                            <div class="ctr-filterItm">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterPromo" id="filterItmAllPromo" class="peer/allPromo hidden sr-only" checked>
                                    <label for="filterItmAllPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/allPromo:bg-[#FF3377] peer-checked/allPromo:text-white peer-checked/allPromo:border-pink-900">
                                        <div class="cFAllPromo">
                                            <div class="tx">Semua</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterPromo" id="filterItmKiloanPromo" class="peer/kiloanPromo hidden sr-only">
                                    <label for="filterItmKiloanPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/kiloanPromo:bg-[#FF3377] peer-checked/kiloanPromo:text-white peer-checked/kiloanPromo:border-pink-900">
                                        <div class="cFKiloanPromo">
                                            <div class="tx">Kiloan</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterPromo" id="filterItmSatuanPromo" class="peer/satuanPromo hidden sr-only">
                                    <label for="filterItmSatuanPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/satuanPromo:bg-[#FF3377] peer-checked/satuanPromo:text-white peer-checked/satuanPromo:border-pink-900">
                                        <div class="cFSatuanPromo">
                                            <div class="tx">Satuan</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ctr-filterItm">
                                <div class="cFilterItm">
                                    <input type="radio" name="filterPromo" id="filterItmOngkirPromo" class="peer/ongkirPromo hidden sr-only">
                                    <label for="filterItmOngkirPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/ongkirPromo:bg-[#FF3377] peer-checked/ongkirPromo:text-white peer-checked/ongkirPromo:border-pink-900">
                                        <div class="cFOngkirPromo">
                                            <div class="tx">Ongkir</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-listPromo mt-4 px-4">
                <div class="cListPromo">
                    @for ($i = 0; $i < 3; $i++)
                        @php
                            $randThis = rand(1, 3);
                        @endphp
                        <div class="ctr-promoItm relative {{($randThis === 1) ? 'mb-6 md:mb-4' : (($randThis > 2) ? 'mb-10 md:mb-10' : (($randThis > 1) ? 'mb-8 md:mb-6' : ''))}}">
                            <div class="ctr-cPromoItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white static z-[3]">
                                <div class="cPromoItm py-4 px-6">
                                    <div class="ctr-headPromoItm">
                                        <div class="cHeadPromoItm flex items-center justify-between">
                                            <div class="ctr-lftTime relative selectDisable">
                                                <div class="cLftTime flex items-center px-4 py-2 gap-2 md:gap-4 rounded-lg font-bold text-sm text-gray-800 bg-gray-300 relative before:absolute before:w-[12%] before:aspect-square before:bg-white before:top-1/2 before:-translate-y-1/2 before:-left-[7%] before:rounded-[100%]">
                                                    <div class="totalPromo w-14">
                                                        <div class="tx line-clamp-1">
                                                            <p>
                                                                @{{3}}
                                                                @{{3}}
                                                                @{{3}}
                                                            </p>
                                                        </div>
                                                        {{-- <span class="icn-bag text-2xl md:text-3xl">
                                                            <i class="fa-solid fa-bag-shopping"></i>
                                                        </span> --}}
                                                    </div>
                                                    <div class="tx">
                                                        <p>Kupon</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="ctr-rghtStatus">
                                                <div class="cStatusTrsc px-4 md:px-8 py-2 rounded-xl  border border-black">
                                                    <div class="txSt text-xs md:text-sm font-semibold">
                                                        <strong>@{{Selesai}}</strong>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="ctr-cTrscItm mt-4">
                                        <div class="cCPromoItm gap-6">
                                            <div class="ctr-lftImg flex-shrink-0">
                                                <div class="cLftImage">
                                                    <div class="imagePromo rounded-xl overflow-hidden">
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
                                                            <div class="txCC text-xs md:text-sm xl:text-base">
                                                                <p>Rp. @{{10,000}} - @{{15,000}}</p>
                                                                <p>{{$randThis}}</p>
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
                                            <div class="ctr-rghtShwDetPromo flex-shrink-0">
                                                <div class="cShwDetPromo">
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
                            <div class="ctr-accs">
                                @php
                                    $accsPrmItm = ($randThis > 2) ? 3 : (($randThis > 1) ? 2 : 0);
                                @endphp
                                @for ($j = 0; $j < $accsPrmItm; $j++)
                                    <div class="accsPrmItm absolute w-full border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white -z-[{{$j+1}}] -bottom-{{3*$j;}}"></div>
                                @endfor
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
    <script src="{{asset('assets/js/pages/users/promo/s.js')}}"></script>
    {{-- <script>
        var timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
        
        $('.txCTimeleft .tx').append(timezone);
    </script> --}}
@endsection