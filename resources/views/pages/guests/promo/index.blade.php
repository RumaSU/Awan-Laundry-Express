@extends('layouts.main.index')
@section('titlePage', 'Promo')

@section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
@endsection

@section('main-content')
<main class="min-h-[100vh] my-6">
    <section class="middle-content-third flex justify-center mt-20">
        <div class="mid-third flex bg-[#0587FF] rounded-xl w-[55%] h-72">
            <div class="left-rd w-[55%] flex justify-center items-center">
                <div class="text-rd text-white text-3xl font-bold w-1/2 h-48 flex justify-center items-center">
                    Promo istimewa di Awan Laundry Express! Hemat dan praktis.
                </div>
            </div>
        </div>
    </section>

    <div class="container-promo my-10">
        <h1><b>PROMO LAUNDRY</b></h1>
        <p>Nikmati promo spesial kami di Awal Laundry Express!</p>
        <p>Dapatkan penawaran istimewa untuk setiap pemesanan laundry Anda.</p>
        <p>Jangan lewatkan kesempatan untuk merasakan kualitas terbaik dengan harga terjangkau.</p>
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
            <a href="#" class="category-button active">Rekomendasi</a>
            <a href="#" class="category-button">Kiloan</a>
            <a href="#" class="category-button">Satuan</a>
            <a href="#" class="category-button">Ongkir</a>
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

@endsection
