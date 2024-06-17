@extends('layouts.main.index')
@section('titlePage', 'Homepage')

{{-- @section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_transaksi.css') }}">
@endsection --}}
@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_transaksi.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_semuaStatus.css') }}">
{{-- <link rel=”stylesheet” href=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css”rel=”nofollow” integritas=”sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ 4Saya” crossorigin=”anonim”>
<skrip src=”https://cdn.jsdelivr.net/npm/ popper.js@1.16.0 /dist/umd/popper.min.js” integritas=”sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo” crossorigin=”anonim”> </skrip>
<skrip src=”https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js” integritas=”sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/” crossorigin=”anonymous”></script > --}}
@endsection

@section('head-style-field')

@endsection


@section('main-content')
<main class="min-h-[100vh] my-6">
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
                    <div class="ctr-nxtBckSpcList text-4xl">
                        <button type="button" class="ctr-backSpc cursor-pointer bg-gray-400/80 hover:bg-gray-600/80 text-[#3A3A3A] hover:text-[#f0f0f0] p-3 rounded-2xl aspect-square absolute z-[80] left-0 top-1/2 -translate-y-1/2" data-carousel-prev>
                            <div class="cBackSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </div>
                        </button>
                        <button type="button" class="ctr-nextSpc cursor-pointer bg-gray-400/80 hover:bg-gray-600/80 text-[#3A3A3A] hover:text-[#f0f0f0] p-3 rounded-2xl aspect-square absolute z-[80] right-0 top-1/2 -translate-y-1/2" data-carousel-next>
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

    <div class="ctr-createOrder middle-content-third flex justify-center mt-20">
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

    <div class="container-promo my-20">
        <h1><b>PROMO LAUNDRY</b></h1>
        <br>
        <div class="filter-bar-promo" style="justify-content: center; align-items: center;">
            <div class="filter-promo" style=" margin-right: 10px;">
                <button class="filter-button-promo" style="padding: 10px 60px;">
                    Filter Berdasarkan Periode
                    <span class="arrow-promo">&#x25B6;</span>
                </button>
                <div class="dropdown-content-promo">
                    <a href="#">Periode 1</a>
                    <a href="#">Periode 2</a>
                    <a href="#">Periode 3</a>
                </div>
            </div>
            <div class="apply-reset-buttons" style=" display: flex;">
                <button class="apply-button">Terapkan</button>
                <button class="reset-button">Reset Filter</button>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Cari Promo">
        </div>
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
        <div class="promo-cards">
            <div class="promo-card">
                <div class="promo-image"></div>
                <p><b>Diskon pencucian sebanyak 10%</b></p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p><b>Diskon pencucian sebanyak 10%</b></p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p><b>Diskon pencucian sebanyak 10%</b></p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p><b>Diskon pencucian sebanyak 10%</b></p>
                <small>Berlaku hingga (waktu)</small>
            </div>
        </div>
    </div>

    <div class="container-transaksi mt-20">
        <h1><b>RIWAYAT TRANSAKSI</b></h1>
        <br>
        <div class="filter-bar-transaksi">
            {{-- <div class="filter-transaksi">
                <button class="filter-button-transaksi-pertama"><b>Semua Status</b>
                    <span class="arrow-transaksi-pertama">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-pertama">
                        <a href="#" class="option">Semua Status</a>
                        <a href="#" class="option">Semua Transaksi Berlangsung</a>
                        <a href="#" class="option">Menunggu Konfirmasi</a>
                        <a href="#" class="option">Diproses</a>
                        <a href="#" class="option">Dikirim</a>
                        <a href="#" class="option">Tiba di Tujuan</a>
                        <a href="#" class="option">Berhasil</a>
                        <a href="#" class="option">Tidak Berhasil</a>
                </div>
            </div> --}}
            <div class="filter-transaksi">
                <button class="filter-button-transaksi-pertama"><b>Semua Status</b>
                    <span class="arrow-transaksi-pertama">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-pertama">
                    <div class="radio">
                        <label for="all-status">Semua Status</label>
                        <input type="radio" name="transaction-status" id="all-status" checked>
                    </div>
                    <div class="radio">
                        <label for="ongoing-transactions">Semua Transaksi Berlangsung</label>
                        <input type="radio" name="transaction-status" id="ongoing-transactions">
                    </div>
                    <div class="radio">
                        <label for="waiting-confirmation">Menunggu Konfirmasi</label>
                        <input type="radio" name="transaction-status" id="waiting-confirmation">
                    </div>
                    <div class="radio">
                        <label for="processed">Diproses</label>
                        <input type="radio" name="transaction-status" id="processed">
                    </div>
                    <div class="radio">
                        <label for="shipped">Dikirim</label>
                        <input type="radio" name="transaction-status" id="shipped">
                    </div>
                    <div class="radio">
                        <label for="arrived">Tiba di Tujuan</label>
                        <input type="radio" name="transaction-status" id="arrived">
                    </div>
                    <div class="radio">
                        <label for="successful">Berhasil</label>
                        <input type="radio" name="transaction-status" id="successful">
                    </div>
                    <div class="radio">
                        <label for="unsuccessful">Tidak Berhasil</label>
                        <input type="radio" name="transaction-status" id="unsuccessful">
                    </div>
                </div>
            </div>


            {{-- <div class="filter-transaksi">
                <button class="filter-button-transaksi-dua"><b>Semua Layanan</b>
                    <span class="arrow-transaksi-dua">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-dua">
                    <a href="#" class="option">Semua Layanan</a>
                    <a href="#" class="option">Kiloan</a>
                    <a href="#" class="option">Satuan</a>
                </div>
            </div> --}}
            <div class="filter-transaksi">
                <button class="filter-button-transaksi-dua"><b>Semua Layanan</b>
                    <span class="arrow-transaksi-dua">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-dua">
                    <div class="radio">
                        <label for="all-services">Semua Layanan</label>
                        <input type="radio" name="service-type" id="all-services" checked>
                    </div>
                    <div class="radio">
                        <label for="kiloan">Kiloan</label>
                        <input type="radio" name="service-type" id="kiloan">
                    </div>
                    <div class="radio">
                        <label for="satuan">Satuan</label>
                        <input type="radio" name="service-type" id="satuan">
                    </div>
                </div>
            </div>


            {{-- <div class="filter-transaksi">
                <button class="filter-button-transaksi-tiga"><b>Semua Tanggal</b>
                    <span class="arrow-transaksi-tiga">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-tiga">
                    <a href="#" class="option">Semua Transaksi</a>
                    <a href="#" class="option">Kurang Dari 30 Hari</a>
                    <a href="#" class="option">Lebih Dari 30 Hari</a>
                    <a href="#" class="option">Pilih Tanggal</a>
                </div>
            </div> --}}
            <div class="filter-transaksi">
                <button class="filter-button-transaksi-tiga"><b>Semua Tanggal</b>
                    <span class="arrow-transaksi-tiga">&#x25B6;</span>
                </button>
                <div class="dropdown-content-transaksi-tiga">
                    <div class="radio">
                        <label for="all-transactions">Semua Transaksi</label>
                        <input type="radio" name="date-range" id="all-transactions" checked>
                    </div>
                    <div class="radio">
                        <label for="less-than-30">Kurang Dari 30 Hari</label>
                        <input type="radio" name="date-range" id="less-than-30">
                    </div>
                    <div class="radio">
                        <label for="more-than-30">Lebih Dari 30 Hari</label>
                        <input type="radio" name="date-range" id="more-than-30">
                    </div>
                    <div class="radio">
                        <label for="custom-dates">Pilih Tanggal</label>
                        <input type="radio" name="date-range" id="custom-dates">
                    </div>
                    {{-- <div class="date" id="custom-date-range" style="display:none;">
                        <label for="start-date">Mulai dari</label>
                        <input type="date" id="start-date" value="">
                        <i class="fas fa-calendar-alt"></i>
                        <label for="end-date">Sampai</label>
                        <input type="date" id="end-date" value="">
                        <i class="fas fa-calendar-alt"></i>
                    </div> --}}
                    <div class="date" id="custom-date-range" style="display:none;">
                        <label for="start-date">Mulai dari
                            <input type="date" id="start-date" value="">
                        </label>
                        <label for="end-date">Sampai
                            <input type="date" id="end-date" value="">
                        </label>
                        {{-- <i class="fas fa-calendar-alt"></i> --}}
                    </div>

                </div>
            </div>


        </div>
        {{-- <div class="transaction-card"> --}}
            {{-- <div class="transaction-info">
                <div class="transaction-icon"></div>
                <div class="transaction-details">
                    <p class="transaction-type"><b>Belanja</b></p>
                    <p class="transaction-date">25 Mar 2024</p>
                    <p class="transaction-description"><b>Pemesanan jasa Kiloan dan Satuan</b></p>
                    <p class="transaction-items">2 Jenis (Kiloan dan Satuan)</p>
                    <p class="transaction-total">Total Belanja</p>
                    <p class="transaction-amount"><b>Rp. 218958192571</b></p>
                </div>
            </div>
            <div class="transaction-actions">
                <button class="complete-button">Selesai</button>
                <button class="details-button">Lihat Detail</button>
            </div> --}}
            <div class="ctr-listOrders mt-4 px-4 w-[80%] mx-auto">
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
                                                            <p>Nama Toko</p>
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
        {{-- <div class="transaction-card">
            <div class="transaction-info">
                <div class="transaction-icon"></div>
                <div class="transaction-details">
                    <p class="transaction-type"><b>Belanja</b></p>
                    <p class="transaction-date">25 Mar 2024</p>
                    <p class="transaction-description"><b>Pemesanan jasa Kiloan dan Satuan</b></p>
                    <p class="transaction-items">2 Jenis (Kiloan dan Satuan)</p>
                    <p class="transaction-total">Total Belanja</p>
                    <p class="transaction-amount"><b>Rp. 218958192571</b></p>
                </div>
            </div>
            <div class="transaction-actions">
                <button class="complete-button">Selesai</button>
                <button class="details-button">Lihat Detail</button>
            </div>
        </div> --}}
    {{-- </div> --}}

    {{-- <div class="wrapper mt-10" style="max-width: 95%; margin: 0 auto;">
        <img src="{{ asset('assets/components/icon/payment-wrapper.png') }}" alt="">
    </div> --}}
    <section class="middle-content-third flex justify-center mt-20">
        <div class="mid-third flex bg-[#0587FF] rounded-xl w-[95%] h-72">
            <div class="left-rd w-[50%] flex justify-center items-center">
                <div class="text-rd text-white text-3xl font-bold w-1/2 h-48 flex justify-center items-center">
                    Semua Pembayaran dalam satu genggaman
                </div>
            </div>
            <div class="right-rd w-[50%] flex">
                <div class="cont-rd-black w-5/6 h-full flex justify-center items-center bg-black">
                    <div class="cont-rd-white w-5/6 h-full bg-white flex items-center p-8">
                        <ul class="mtd-payment space-y-3">
                            <li>
                                <div class="itm-c bg-gray-300 w-72 h-12 flex justify-center items-center rounded-lg px-2">
                                    <div class="image-payment w-1/4 flex justify-center items-center">
                                        <img src="{{asset('assets/components/icon/wallet.png')}}" alt="e wallet" class="w-8 h-8">
                                    </div>
                                    <div class="metode-pembayaran w-3/4 flex items-center ml-4">
                                        <p class="text-gray-800">E Wallet</p>
                                    </div>
                                    <div class="input-payment w-1/4 flex justify-center items-center">
                                        <input type="radio">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itm-c bg-gray-300 w-72 h-12 flex justify-center items-center rounded-lg px-2">
                                    <div class="image-payment w-1/4 flex justify-center items-center">
                                        <img src="{{asset('assets/components/icon/bank.png')}}" alt="e wallet" class="w-8 h-8">
                                    </div>
                                    <div class="metode-pembayaran w-3/4 flex items-center ml-4">
                                        <p class="text-gray-800">BANK</p>
                                    </div>
                                    <div class="input-payment w-1/4 flex justify-center items-center">
                                        <input type="radio">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itm-c bg-gray-300 w-72 h-12 flex justify-center items-center rounded-lg px-2">
                                    <div class="image-payment w-1/4 flex justify-center items-center">
                                        <img src="{{asset('assets/components/icon/credit.png')}}" alt="e wallet" class="w-8 h-8">
                                    </div>
                                    <div class="metode-pembayaran w-3/4 flex items-center ml-4">
                                        <p class="text-gray-800">Kartu Kredit</p>
                                    </div>
                                    <div class="input-payment w-1/4 flex justify-center items-center">
                                        <input type="radio">
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="itm-c bg-gray-300 w-72 h-12 flex justify-center items-center rounded-lg px-2">
                                    <div class="image-payment w-1/4 flex justify-center items-center">
                                        <img src="{{asset('assets/components/icon/debit.png')}}" alt="e wallet" class="w-8 h-8">
                                    </div>
                                    <div class="metode-pembayaran w-3/4 flex items-center ml-4">
                                        <p class="text-gray-800">Kartu Debit</p>
                                    </div>
                                    <div class="input-payment w-1/4 flex justify-center items-center">
                                        <input type="radio">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection




@section('script-field')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Logic for dropdown pertama
    var filterButtonsTransaksiPertama = document.querySelectorAll('.filter-button-transaksi-pertama');
    var dropdownsTransaksiPertama = document.querySelectorAll('.dropdown-content-transaksi-pertama');
    var arrowsTransaksiPertama = document.querySelectorAll('.arrow-transaksi-pertama');

    filterButtonsTransaksiPertama.forEach(function(button, index) {
        button.addEventListener('click', function() {
            dropdownsTransaksiPertama[index].style.display = (dropdownsTransaksiPertama[index].style.display === "none" || dropdownsTransaksiPertama[index].style.display === "") ? "block" : "none";
            arrowsTransaksiPertama[index].innerHTML = (dropdownsTransaksiPertama[index].style.display === "none" || dropdownsTransaksiPertama[index].style.display === "") ? "&#x25B6;" : "&#x25BC;";
        });
    });

    window.addEventListener('click', function(event) {
        filterButtonsTransaksiPertama.forEach(function(button, index) {
            if (!button.contains(event.target) && !dropdownsTransaksiPertama[index].contains(event.target)) {
                dropdownsTransaksiPertama[index].style.display = "none";
                arrowsTransaksiPertama[index].innerHTML = "&#x25B6;";
            }
        });
    });

    // Logic for dropdown kedua (Semua Layanan)
    var filterButtonsTransaksiDua = document.querySelectorAll('.filter-button-transaksi-dua');
    var dropdownsTransaksiDua = document.querySelectorAll('.dropdown-content-transaksi-dua');
    var arrowsTransaksiDua = document.querySelectorAll('.arrow-transaksi-dua');

    filterButtonsTransaksiDua.forEach(function(button, index) {
        button.addEventListener('click', function() {
            dropdownsTransaksiDua[index].style.display = (dropdownsTransaksiDua[index].style.display === "none" || dropdownsTransaksiDua[index].style.display === "") ? "block" : "none";
            arrowsTransaksiDua[index].innerHTML = (dropdownsTransaksiDua[index].style.display === "none" || dropdownsTransaksiDua[index].style.display === "") ? "&#x25B6;" : "&#x25BC;";
        });
    });

    window.addEventListener('click', function(event) {
        filterButtonsTransaksiDua.forEach(function(button, index) {
            if (!button.contains(event.target) && !dropdownsTransaksiDua[index].contains(event.target)) {
                dropdownsTransaksiDua[index].style.display = "none";
                arrowsTransaksiDua[index].innerHTML = "&#x25B6;";
            }
        });
    });

    // Logic for dropdown ketiga (Semua Tanggal)
    var filterButtonsTransaksiTiga = document.querySelectorAll('.filter-button-transaksi-tiga');
    var dropdownsTransaksiTiga = document.querySelectorAll('.dropdown-content-transaksi-tiga');
    var arrowsTransaksiTiga = document.querySelectorAll('.arrow-transaksi-tiga');

    filterButtonsTransaksiTiga.forEach(function(button, index) {
        button.addEventListener('click', function() {
            dropdownsTransaksiTiga[index].style.display = (dropdownsTransaksiTiga[index].style.display === "none" || dropdownsTransaksiTiga[index].style.display === "") ? "block" : "none";
            arrowsTransaksiTiga[index].innerHTML = (dropdownsTransaksiTiga[index].style.display === "none" || dropdownsTransaksiTiga[index].style.display === "") ? "&#x25B6;" : "&#x25BC;";
        });
    });

    window.addEventListener('click', function(event) {
        filterButtonsTransaksiTiga.forEach(function(button, index) {
            if (!button.contains(event.target) && !dropdownsTransaksiTiga[index].contains(event.target)) {
                dropdownsTransaksiTiga[index].style.display = "none";
                arrowsTransaksiTiga[index].innerHTML = "&#x25B6;";
            }
        });
    });

    // Logic for dropdown promo
    var filterButtonPromo = document.querySelector('.filter-button-promo');
    var dropdownContentPromo = document.querySelector('.dropdown-content-promo');
    var arrowPromo = document.querySelector('.arrow-promo');

    filterButtonPromo.addEventListener('click', function() {
        if (dropdownContentPromo.style.display === "none" || dropdownContentPromo.style.display === "") {
            dropdownContentPromo.style.display = "block";
            arrowPromo.innerHTML = "&#x25BC;"; // Panah ke bawah
        } else {
            dropdownContentPromo.style.display = "none";
            arrowPromo.innerHTML = "&#x25B6;"; // Panah ke samping
        }
    });

    window.addEventListener('click', function(event) {
        if (!filterButtonPromo.contains(event.target) && !dropdownContentPromo.contains(event.target)) {
            dropdownContentPromo.style.display = "none";
            arrowPromo.innerHTML = "&#x25B6;"; // Panah ke samping
        }
    });

    // Logic for custom date range display
    const customDates = document.getElementById("custom-date-range");
        const customDatesRadio = document.getElementById("custom-dates");

        customDatesRadio.addEventListener("change", () => {
            if (customDatesRadio.checked) {
                customDates.style.display = "flex";
            } else {
                customDates.style.display = "none";
            }
        });

        const dateRangeRadios = document.querySelectorAll('input[name="date-range"]');
        dateRangeRadios.forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.id === "custom-dates" && this.checked) {
                    customDates.style.display = "flex";
                } else {
                    customDates.style.display = "none";
                }
            });
        });
});
</script>

</script>




@endsection
