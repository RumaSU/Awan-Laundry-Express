@extends('layouts.main.index')
@section('head-field')
    
@endsection

@section('main-content')
    <main class="min-h-[100vh] mt-6">
        <section class="top-section-page">
            <div class="contentWrapper lg:flex lg:justify-center lg:items-center border border-black">
                <div class="leftWrapper w-full bg-blue-600 p-8">
                    <div class="leftContent text-white">
                        <div class="storeNameContent flex justify-between border border-black">
                            <div class="nameContent border border-black flex-grow">
                                <h1 class="text-6xl font-bold cursor-default">Awan Laundry Express</h1>
                            </div>
                            <div class="imgLogo border border-black w-1/4 aspect-auto flex items-center justify-center relative group">
                                <div class="img w-24 aspect-square border border-black shadow-black shadow-sm rounded-lg overflow-hidden relative z-[2]">
                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="absolute w-full h-full object-cover object-center">
                                </div>
                                <div class="ef absolute w-24 aspect-square">
                                    <div class="l absolute top-1/2 right-1/2 border-t-4 border-r-4 border-black w-6 h-4 rounded-tr-lg group-hover:-right-2 group-hover:-top-2 group-hover:animate-bounce transition-all duration-300 ease-in-out delay-150"></div>
                                    <div class="l absolute bottom-1/2 left-1/2 border-l-4 border-b-4 border-black w-6 h-4 rounded-bl-lg group-hover:-left-3 group-hover:-bottom-3 group-hover:animate-bounce transition-all duration-300 ease-in-out"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightWrapper w-full bg-white">
                    <div class="rightContent">
                        and this
                    </div>
                </div>
            </div>
        </section>
        <section class="after-top-conten">
            <div class="at-content">
                <div class="left-content">
                    <div class="kurir-icon">
                        <img src="{{asset('assets/components/icon/kurir.png')}}" alt="" class="object-cover object-center">
                    </div>
                </div>
                <div class="right-content">
                    <div class="right-top-content">
                        <div class="deks-app">
                            <p>
                                APLIKASI PEMESANAN LAUNDRY EXPRESS DELIVERY
                            </p>
                        </div>
                    </div>
                    <div class="right-mid-content">
                        <div class="mid-login-button">
                            <button>Login</button>
                        </div>
                    </div>
                    <div class="right-botm-content">
                        <div class="ctr-chs hidden xl:block">
                            <ul class="flex items-center gap-6 text-[#777676] text-[1.1rem]">
                                <li>
                                    <div class="c-btm">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/bag-shopping.png')}}" alt="" class="object-cover object-center">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="c-btm">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/cart-shopping.png')}}" alt="" class="object-cover object-center">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="c-btm">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/motorcycle.png')}}" alt="" class="object-cover object-center">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mid-first-content">
                <div class="md-first-left">
                    <div class="desk-midcontent">
                        <p class="mid-headline">
                            PESAN LAUNDRY EXPRESS TANPA RIBET DATENG KE TEMPAT ?
                        </p>
                        <p class="mid-subline">
                            Awan Laundry Express memberikan solusi untuk mempermudah
                            proses pemesanan layanan laundry express dengan banyak
                            promo dan layanan
                        </p>
                    </div>
                </div>
                <div class="md-first-right">
                    <div class="mdst-right-content bg-gradi">
                        CONTEN PROMO
                    </div>
                </div>
            </div>
        </section>
        <section class="middle-conten">
            <div class="fst-middle-content">
                <div class="middle-st-left">
                    <div class="diamond-gradient">
                        <div class="diamond-gradient-in">
                            <div class="text-diamond">
                                <div class="headline-diamond">
                                    <p>
                                        Penawaran Spesial
                                    </p>
                                </div>
                                <div class="subline-diamond">
                                    <p>
                                        Temukan lebih banyak penawaran promo yang didapatkan untuk Anda menghemat biaya laundry.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="btn-swipe-mid">
                            <button class="btn-swipe-right">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </button>
                            <button class="btn-swipe-left">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="middle-st-right">
                    <div class="mid-container">
                        <div class="md-cont-top">
                            <p>
                                Kiloan duar
                            </p>
                        </div>
                        <div class="md-cont-midst">
                            <div class="text-midst">
                                <p>
                                    Kiloan duar
                                </p>
                            </div>
                        </div>
                        <div class="md-cont-midnd">
                            <table>
                                <tr>
                                    <td>
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/store.png')}}" alt="" class="object-cover object-center w-5">
                                        </div>
                                    </td>
                                    <td style="font-size: 12px">Tenggat Promo</td>
                                </tr>
                                <tr>
                                    <td style="width: 30px">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/clock-regular.png')}}" alt="" class="object-cover object-center w-5">
                                        </div></td>
                                    <td style="font-size: 12px">Nama Toko</td>
                                </tr>
                            </table>
                        </div>
                        <div class="md-cont-midtd">
                            <div class="btn-midtd">
                                <button>Gunakan Sekien</button>
                            </div>
                        </div>
                        <div class="md-cont-bottom">
                            <p>
                                Lihat Detail
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scnd-middle-content">
                
            </div>
        </section>
    </main>
@endsection

@section('script-field')
    
@endsection