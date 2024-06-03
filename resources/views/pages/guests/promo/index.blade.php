@extends('layouts.main.index')
@section('titlePage', 'Promo')

@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/homepage_promo.css') }}">
@endsection

@section('head-style-field')

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
        {{-- <div class="category-bar">
            <a href="#" class="category-button active">Rekomendasi</a>
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
