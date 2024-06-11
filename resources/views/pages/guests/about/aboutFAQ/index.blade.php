@extends('layouts.main.index')

@section('head-style-field')
<link rel="stylesheet" href="{{ asset('assets/css/about/about-faq.css') }}">
@endsection

@section('main-content')
<div class="main-about">
    <div class="container-faq">
        <div class="header-faq">
            <div class="judul-about">
                <p>FAQ</p>
            </div>
        </div>
        <div class="desk-faq">
            <div class="container-chat-client">
                <div class="img-chat-client">
                    <img src="{{ asset('assets/components/icon/user.png') }}" alt="">
                </div>
                <div class="main-faq-client">
                    <p>Bagaimana Cara Memesan Layanan Laundry melalui Awan Laundry Express?</p>
                </div>
            </div>
            <div class="container-chat-admin">
                <div class="main-faq-admin">
                    <p>Untuk memesan layanan laundry melalui Awan Laundry Express, Anda cukup lakukan registrasi akun, pilih layanan yang Anda butuhkan, tentukan waktu pengambilan dan pengantaran, dan lakukan pembayaran. </p>
                </div>
                <div class="img-chat-admin">
                    <img src="{{ asset('assets/components/icon/admin-chat.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="desk-faq">
            <div class="container-chat-client">
                <div class="img-chat-client">
                    <img src="{{ asset('assets/components/icon/user.png') }}" alt="">
                </div>
                <div class="main-faq-client">
                    <p>Apakah Awan Laundry Express Menerima Pembayaran secara Cashless?</p>
                </div>
            </div>
            <div class="container-chat-admin">
                <div class="main-faq-admin">
                    <p>Ya, kami menerima pembayaran menggunakan Cashless. Anda dapat memasukkan informasi E-Wallet Anda secara aman di aplikasi kami saat melakukan pembayaran untuk layanan yang Anda pesan.</p>
                </div>
                <div class="img-chat-admin">
                    <img src="{{ asset('assets/components/icon/admin-chat.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="desk-faq">
            <div class="container-chat-client">
                <div class="img-chat-client">
                    <img src="{{ asset('assets/components/icon/user.png') }}" alt="">
                </div>
                <div class="main-faq-client">
                    <p>Berapa Lama Waktu yang Dibutuhkan untuk Layanan Pengambilan dan Pengantaran Laundry?</p>
                </div>
            </div>
            <div class="container-chat-admin">
                <div class="main-faq-admin">
                    <p>Waktu pengambilan dan pengantaran laundry bervariasi tergantung pada lokasi Anda dan jam kerja kami. Biasanya, kami akan berusaha untuk mengambil dan mengantarkan laundry Anda dalam waktu yang sesuai dengan jadwal yang Anda tentukan saat memesan.</p>
                </div>
                <div class="img-chat-admin">
                    <img src="{{ asset('assets/components/icon/admin-chat.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="desk-faq">
            <div class="container-chat-client">
                <div class="img-chat-client">
                    <img src="{{ asset('assets/components/icon/user.png') }}" alt="">
                </div>
                <div class="main-faq-client">
                    <p>Bagaimana Jika Saya Tidak Puas dengan Layanan yang Diberikan?</p>
                </div>
            </div>
            <div class="container-chat-admin">
                <div class="main-faq-admin">
                    <p>Kami berusaha untuk memberikan layanan terbaik kepada setiap pelanggan kami. Jika Anda tidak puas dengan layanan yang kami berikan, harap hubungi tim dukungan pelanggan kami segera agar kami dapat menyelesaikan masalah Anda dengan memuaskan.</p>
                </div>
                <div class="img-chat-admin">
                    <img src="{{ asset('assets/components/icon/admin-chat.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="bottom-faq">
            <p>Kami berharap FAQ ini membantu menjawab pertanyaan Anda. Jika Anda memiliki pertanyaan lain atau membutuhkan bantuan lebih lanjut, jangan ragu untuk menghubungi kami. Terima kasih atas kepercayaan Anda kepada Awan Laundry Express!</p>
        </div>
    </div>
</div>
@endsection

@section('script-field')
    
@endsection