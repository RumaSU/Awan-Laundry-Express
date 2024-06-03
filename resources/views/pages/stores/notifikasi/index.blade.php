@extends('layouts.store.index')
@section('titlePage', 'Notifikasi')

{{-- @section('head-field')
<link rel="stylesheet" href="{{ asset('assets/components/css/page/notifikasi.css') }}">
<link rel="stylesheet" href="{{ asset('assets/components/css/stores/notifikasi.css') }}">
@endsection --}}
@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/notifikasi.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/stores/notifikasi.css') }}">
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
    .cCPromoItm .imagePromo {
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

@section('main-content-store')
<div class="ctr-transaction mt-8">
    <div class="cTransaction">
        <div class="headTransaction ml-[10%]">
            <div class="tx text-xl font-bold">
                <h2>Notifikasi</h2>
            </div>
            <div class="notifikasi-buttons">
                <a href="#" class="notifikasi-button active" id="btn-semua">Semua</a>
                <a href="#" class="notifikasi-button" id="btn-transaksi">Transaksi</a>
                <a href="#" class="notifikasi-button" id="btn-promo">Promo</a>
                <a href="#" class="notifikasi-button" id="btn-info">Info</a>
            </div>
            <div class="notifikasi-item" id="item-info-1" data-type="info">
                <div class="notifikasi-icon">
                    {{-- <i class="fas fa-info-circle"></i> --}}
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

<div class="ctr-promo mt-8">
    <div class="cPromo">
        <div class="ctr-headPromo">
            <div class="cHeadPromo">
                <div class="titlePromo ml-[2%]">
                    <div class="tx text-xl font-bold">
                        <h2>Promo Tokomu</h2>
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

@section('script-field')

@endsection
