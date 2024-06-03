@extends('layouts.store.index')
@section('titlePage', 'Notifikasi')

@section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/page/notifikasi.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/stores/notifikasi.css') }}">
@endsection

@section('main-content')
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

    <br><br><br>

    <div class="container">
        <div class="title">Promo Tokomu</div>
        <div class="card">
            {{-- <div class="coupon">3 Kupon</div> --}}
            <div class="header">
                <div class="coupon">1 Kupon</div>
            </div>
            <div class="content-wrapper">
                <div class="image"></div>
                <div class="content">
                    <div class="description"><b>Pesanan Hemat Hingga 15,000</b></div>
                    <div class="promo-button-wrapper">
                        <div class="promo-button">Satuan</div>
                        <div class="promo-button">Kiloan</div>
                    </div>
                    <div class="kategori-price-wrapper">
                        <div class="kategori">Jaket</div>
                        <div class="price">- Rp. 3,000</div>
                    </div>
                    <div class="kategori-price-wrapper">
                        <div class="kategori">Hoodie</div>
                        <div class="price">- Rp. 5,000</div>
                    </div>
                </div>
            </div>
            <div class="waktuKisaran">
                <div class="time">
                    <i class="icon"><img src="{{ asset('assets/components/icon/clock-regular.png') }}" alt=""></i>
                    <div class="waktu">Hingga 28 Maret 2024</div>
                </div>
                <div class="transaction">
                    <i class="transaction-icon"><img src="{{ asset('assets/components/icon/money-bill.png') }}" alt=""></i>
                    <div class="transaction-details">
                        <div class="kisaran">Kisaran transaksi</div>
                        <div class="kisaran-harga">Rp. 3,000 - Rp.15,000</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            {{-- <div class="coupon">3 Kupon</div> --}}
            <div class="header">
                <div class="coupon">1 Kupon</div>
            </div>
            <div class="content-wrapper">
                <div class="image"></div>
                <div class="content">
                    <div class="description"><b>Pesanan Hemat Hingga 15,000</b></div>
                    <div class="promo-button-wrapper">
                        <div class="promo-button">Satuan</div>
                        <div class="promo-button">Kiloan</div>
                    </div>
                    <div class="kategori-price-wrapper">
                        <div class="kategori">Jaket</div>
                        <div class="price">- Rp. 3,000</div>
                    </div>
                    <div class="kategori-price-wrapper">
                        <div class="kategori">Hoodie</div>
                        <div class="price">- Rp. 5,000</div>
                    </div>
                </div>
            </div>
            <div class="waktuKisaran">
                <div class="time">
                    <i class="icon"><img src="{{ asset('assets/components/icon/clock-regular.png') }}" alt=""></i>
                    <div class="waktu">Hingga 28 Maret 2024</div>
                </div>
                <div class="transaction">
                    <i class="transaction-icon"><img src="{{ asset('assets/components/icon/money-bill.png') }}" alt=""></i>
                    <div class="transaction-details">
                        <div class="kisaran">Kisaran transaksi</div>
                        <div class="kisaran-harga">Rp. 3,000 - Rp.15,000</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-field')
@endsection
