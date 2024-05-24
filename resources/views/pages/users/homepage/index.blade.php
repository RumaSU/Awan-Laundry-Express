@extends('layouts.main.index')
@section('titlePage', 'Homepage')

@section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_transaksi.css') }}">
@endsection


@section('main-content')
<main class="min-h-[100vh] my-6">
    <div class="ctr-specialForUser mt-10">
        <div class="cSpecialFUser">
            <div class="headSpecial ml-[2.5%]">
                <div class="tx text-[#FF3377] italic font-black" style="text-shadow: 0 4px 2px rgba(0, 0, 0, 0.2)">
                    <h2>Spesial Untukmu</h2>
                </div>
            </div>
            <div class="ctr-specialList mt-0.5 mx-auto w-[95%] h-44 border-[3px] border-gray-400 p-2 rounded-xl">
                <div class="cSpecialList h-full relative ">
                    <div class="ctr-cSpecialList h-full overflow box-border">
                        <div class="cLstSpecial flex items-center h-full relative">
                            <div class="ctr-spcItm absolute w-full h-full transition-all translate-x-[0]">
                                <div class="cSpecialItm1 h-full">
                                    <div class="pctSpc h-full">
                                        <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-nxtBckSpcList text-4xl text-[#3A3A3A]">
                        <div class="ctr-backSpc py-2 px-1 absolute z-10 left-0 top-1/2 -translate-y-1/2">
                            <div class="cBackSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ctr-nextSpc py-2 px-1 absolute z-10 right-0 top-1/2 -translate-y-1/2">
                            <div class="cNextSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-promo my-10">
        <h1><b>PROMO LAUNDRY</b></h1>
        <br>
        <div class="filter-bar">
            <div class="filter">
                <button class="filter-button">Filter Berdasarkan Periode</button>
                <div class="dropdown-content">
                    <a href="#">Periode 1</a>
                    <a href="#">Periode 2</a>
                    <a href="#">Periode 3</a>
                </div>
            </div>
            <div class="apply-reset-buttons">
                <button class="apply-button">Terapkan</button>
                <button class="reset-button">Reset Filter</button>
            </div>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Cari Promo">
        </div>
        <div class="category-bar">
            <button class="category-button active">Semua</button>
            <button class="category-button">Kiloan</button>
            <button class="category-button">Satuan</button>
            <button class="category-button">Ongkir</button>
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

    <div class="container-transaksi mt-10">
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

    <div class="wrapper mt-10" style="max-width: 95%; margin: 0 auto;">
        <img src="{{ asset('assets/components/icon/payment-wrapper.png') }}" alt="">
    </div>
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
