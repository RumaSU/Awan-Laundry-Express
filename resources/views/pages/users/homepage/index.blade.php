@extends('layouts.main.index')
@section('titlePage', 'Homepage')

{{-- @section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_transaksi.css') }}">
@endsection --}}
@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_transaksi.css') }}">
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
        <div class="filter-bar" style="justify-content: center; align-items: center;">
            <div class="filter" style=" margin-right: 10px;">
                <button class="filter-button" style="padding: 10px 60px;">Filter Berdasarkan Periode</button>
                <div class="dropdown-content">
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
        {{-- <div class="category-bar">
            <a href="#" class="category-button active">Semua</a>
            <a href="#" class="category-button">Kiloan</a>
            <a href="#" class="category-button">Satuan</a>
            <a href="#" class="category-button">Ongkir</a>
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
        <div class="promo-cards">
            <div class="promo-card">
                <div class="promo-image"></div>
                <p>Diskon pencucian sebanyak 10% bla bla bla</p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p>Diskon pencucian sebanyak 10% bla bla bla</p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p>Diskon pencucian sebanyak 10% bla bla bla</p>
                <small>Berlaku hingga (waktu)</small>
            </div>
            <div class="promo-card">
                <div class="promo-image"></div>
                <p>Diskon pencucian sebanyak 10% bla bla bla</p>
                <small>Berlaku hingga (waktu)</small>
            </div>
        </div>
    </div>

    <div class="container-transaksi mt-20">
        <h1><b>RIWAYAT TRANSAKSI</b></h1>
        <br>
        <div class="filter-bar">
            <button class="filter-button">Semua Status</button>
            <button class="filter-button">Semua Layanan</button>
            <button class="filter-button">Semua Tanggal</button>
        </div>
        <div class="transaction-card">
            <div class="transaction-info">
                <div class="transaction-icon"></div>
                <div class="transaction-details">
                    <p class="transaction-type">Belanja</p>
                    <p class="transaction-date">25 Mar 2024</p>
                    <p class="transaction-description">Pemesanan jasa Kiloan dan Satuan</p>
                    <p class="transaction-items">2 Jenis (Kiloan dan Satuan)</p>
                    <p class="transaction-total">Total Belanja</p>
                    <p class="transaction-amount">Rp. 218958192571</p>
                </div>
            </div>
            <div class="transaction-actions">
                <button class="complete-button">Selesai</button>
                <button class="details-button">Lihat Detail</button>
            </div>
        </div>
        <div class="transaction-card">
            <div class="transaction-info">
                <div class="transaction-icon"></div>
                <div class="transaction-details">
                    <p class="transaction-type">Belanja</p>
                    <p class="transaction-date">25 Mar 2024</p>
                    <p class="transaction-description">Pemesanan jasa Kiloan dan Satuan</p>
                    <p class="transaction-items">2 Jenis (Kiloan dan Satuan)</p>
                    <p class="transaction-total">Total Belanja</p>
                    <p class="transaction-amount">Rp. 218958192571</p>
                </div>
            </div>
            <div class="transaction-actions">
                <button class="complete-button">Selesai</button>
                <button class="details-button">Lihat Detail</button>
            </div>
        </div>
    </div>

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
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var filterButton = document.getElementById('filterButton');
        var dropdownContent = document.getElementById('dropdownContent');

        filterButton.onclick = function(event) {
            event.stopPropagation();
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        };

        window.onclick = function(event) {
            if (!event.target.matches('.filter-button')) {
                dropdownContent.style.display = 'none';
            }
        };
    });
</script> --}}
@endsection
