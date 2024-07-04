@extends('layouts.user.index')
@section('titlePage', 'Akun saya')

@section('head-link-field')
    <link rel="stylesheet" href="{{ asset('assets/css/page/notifikasi.css') }}">
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
        .selectDisable {
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
    </style>
@endsection

@section('main-content-user')
    <div class="ctr-summUser pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
        <div class="summaryUser">
            <div class="ctr-userProfile p-3 bg-white w-fit rounded-md border border-[#9D9D9D] shadow-sm shadow-gray-400">
                <div class="userProfile flex items-center justify-between">
                    <div class="ctr-lftPhoName flex items-center gap-4">
                        <div class="ctr-photoUser">
                            <div class="cPhotoUser w-20 aspect-square rounded-lg p-1.5 border-2 border-[#D9D9D9]">
                                <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                            </div>
                        </div>
                        <div class="ctr-nameUser w-48 md:w-60 xl:w-72">
                            <div class="cNameUser -space-y-1">
                                <div class="nameUser">
                                    <div class="txNmU text-lg font-light line-clamp-2">
                                        <p>
                                            @{{Nama User}}
                                        </p>
                                    </div>
                                </div>
                                <div class="emailUser">
                                    <div class="txEmU text-sm line-clamp-1">
                                        <p>@{{emailuser@gmail.com}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-rghtSett">
                        <div class="ctr-setting">
                            <div class="cSetting">
                                <a href="" class="flex items-center justify-center w-14 aspect-square border border-[#9D9D9D] rounded-lg">
                                    <div class="icn">
                                        <span class="icnSettings text-[#9D9D9D] text-3xl">
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
                                    <div class="labelOut -space-y-2 text-[#747474]">
                                        <div class="tx-lblT">
                                            <div class="txT text-sm">
                                                <p>Catatan Keuangan</p>
                                            </div>
                                        </div>
                                        <div class="tx-lblB">
                                            <div class="txB text-lg">
                                                <p>Uang Keluar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalMoney flex justify-end">
                            <div class="cTotalMoney w-4/5 bg-[#FF8777] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalMoney text-[#500A00] text-lg text-right font-bold">
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
                                            <div class="txT text-lg">
                                                <p>Promo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalPromo flex justify-end">
                            <div class="cTotalPromo w-4/5 bg-[#FFC978] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalPromo text-[#500A00] text-lg font-bold">
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

    <div class="ctr-transaction mt-8">
        <div class="cTransaction">
            <div class="headTransaction ml-[10%]">
                <div class="tx text-xl font-bold">
                    <h2>Notifikasi</h2>
                </div>
                {{-- <div class="notifikasi-buttons">
                    <a href="#" class="notifikasi-button active" id="btn-semua">Semua</a>
                    <a href="#" class="notifikasi-button" id="btn-transaksi">Transaksi</a>
                    <a href="#" class="notifikasi-button" id="btn-promo">Promo</a>
                    <a href="#" class="notifikasi-button" id="btn-info">Info</a>
                </div> --}}
                <div class="ctr-promo mb-4">
                    <div class="cPromo flex justify-center">
                        <div class="ctr-headPromo">
                            <div class="cHeadPromo">
                                <div class="ctr-listFilterPromo">
                                    <div class="cListFilterPromo">
                                        <div class="ctr-filterItm selectDisable flex flex-wrap items-center gap-4  font-bold">
                                            <div class="cFilterItm">
                                                <input type="radio" name="filterPromo" id="filterItmAllPromo" class="peer/allPromo hidden sr-only" checked>
                                                <label for="filterItmAllPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/allPromo:bg-[#FF3377] peer-checked/allPromo:text-white peer-checked/allPromo:border-pink-900">
                                                    <div class="cFAllPromo">
                                                        <div class="tx">Semua</div>
                                                    </div>
                                                </label>
                                                {{-- <div class="btn-filterItm">
                                                    <button class="border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 btnFilterItmActive">
                                                        <div class="cBtn">
                                                            <div class="tx">Semua</div>
                                                        </div>
                                                    </button>
                                                </div> --}}
                                            </div>
                                            <div class="cFilterItm">
                                                <input type="radio" name="filterPromo" id="filterItmKiloanPromo" class="peer/kiloanPromo hidden sr-only">
                                                <label for="filterItmKiloanPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/kiloanPromo:bg-[#FF3377] peer-checked/kiloanPromo:text-white peer-checked/kiloanPromo:border-pink-900">
                                                    <div class="cFKiloanPromo">
                                                        <div class="tx">Kiloan</div>
                                                    </div>
                                                </label>
                                                {{-- <div class="btn-filterItm">
                                                    <button class="border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 btnFilterItmNotActive">
                                                        <div class="cBtn">
                                                            <div class="tx">Kiloan</div>
                                                        </div>
                                                    </button>
                                                </div> --}}
                                            </div>
                                            <div class="cFilterItm">
                                                <input type="radio" name="filterPromo" id="filterItmSatuanPromo" class="peer/satuanPromo hidden sr-only">
                                                <label for="filterItmSatuanPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/satuanPromo:bg-[#FF3377] peer-checked/satuanPromo:text-white peer-checked/satuanPromo:border-pink-900">
                                                    <div class="cFSatuanPromo">
                                                        <div class="tx">Satuan</div>
                                                    </div>
                                                </label>
                                                {{-- <div class="btn-filterItm">
                                                    <button class="border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 btnFilterItmNotActive">
                                                        <div class="cBtn">
                                                            <div class="tx">Satuan</div>
                                                        </div>
                                                    </button>
                                                </div> --}}
                                            </div>
                                            <div class="cFilterItm">
                                                <input type="radio" name="filterPromo" id="filterItmOngkirPromo" class="peer/ongkirPromo hidden sr-only">
                                                <label for="filterItmOngkirPromo" class="block cursor-pointer border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 border-gray-400 hover:bg-[#FF3377] hover:text-white hover:border-pink-900 peer-checked/ongkirPromo:bg-[#FF3377] peer-checked/ongkirPromo:text-white peer-checked/ongkirPromo:border-pink-900">
                                                    <div class="cFOngkirPromo">
                                                        <div class="tx">Ongkir</div>
                                                    </div>
                                                </label>
                                                {{-- <div class="btn-filterItm">
                                                    <button class="border px-6 md:px-8 xl:px-10 py-2 rounded-full transition-all duration-300 btnFilterItmNotActive">
                                                        <div class="cBtn">
                                                            <div class="tx">Ongkir</div>
                                                        </div>
                                                    </button>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="notifikasi-item" id="item-info-1" data-type="info">
                    <div class="notifikasi-icon">
                        <img src="{{ asset('assets/components/icon/circle-info-solid.png') }}" alt="">
                        <span class="icon-text">Info</span>
                    </div>
                    <div class="notifikasi-item-title">Selamat datang di Awan Laundry Express!</div>
                    <div class="notifikasi-item-content">
                        Haloo {nama}, selamat datang di Awan Laundry Express. Nikmati berbagai
                        kemudahan lainnya untuk memenuhi kebutuhan pencucian kamu.
                    </div>
                    <div class="notifikasi-item-date">26 Maret 2024</div>
                </div>
                <div class="notifikasi-item" id="item-info-2" data-type="info">
                    <div class="notifikasi-icon">
                        <img src="{{ asset('assets/components/icon/circle-info-solid.png') }}" alt="">
                        <span class="icon-text">Info</span>
                    </div>
                    <div class="notifikasi-item-title">Ada aktivitas login di perangkat baru</div>
                    <div class="notifikasi-item-content">
                        Akunmu telah login melalui perangkat Chrome 123 pada Selasa, 26 Maret
                        2024 23:57 WIB.
                    </div>
                    <div class="notifikasi-item-date">26 Maret 2024</div>
                </div>
                <div class="notifikasi-item" id="item-transaksi-1" data-type="transaksi">
                    <div class="notifikasi-icon">
                        <img src="{{ asset('assets/components/icon/circle-cart-shopping-solid.png') }}" alt="">
                        <span class="icon-text">Transaksi</span>
                    </div>
                    <div class="notifikasi-item-title">Pesananmu saat ini sedang diproses</div>
                    <div class="notifikasi-item-content">
                        Pesananmu dengan layanan {nama layanan} sedang diproses!
                    </div>
                    <div class="notifikasi-item-date">26 Maret 2024</div>
                </div>
                <div class="notifikasi-item" id="item-promo-1" data-type="promo">
                    <div class="notifikasi-icon">
                        <img src="{{ asset('assets/components/icon/circle-cart-promo-solid.png') }}" alt="">
                        <span class="icon-text">Promo</span>
                    </div>
                    <div class="notifikasi-item-title">Hore! Selamat, Anda telah berhasil mendapatkan promo menarik.</div>
                    <div class="notifikasi-item-content">
                        Selamat! Anda berhasil mendapatkan promo {nama promo}. Pastikan untuk
                        memanfaatkannya saat pencucian laundry berikutnya untuk menghemat
                        biaya.
                    </div>
                    <div class="notifikasi-item-date">26 Maret 2024</div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('different-content-user')
    <div class="ctr-createOrder">
        <div class="cCreateOrder flex items-center gap-4">
            <div class="ctr-lftCreateOrder flex-shrink-0">
                <div class="cLeftCreateOrder bg-[#05B8FF] w-80 h-60 px-6 pt-6 pb-12 relative overflow-hidden rounded-tl-3xl shadow-lg shadow-gray-400">
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
                                    <a href="" class="clCreateOrder w-fit px-8 py-2 text-sm rounded-xl border border-black block">
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
            <div class="ctr-rghtImgLaundry flex-shrink w-[50rem] relative">
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
