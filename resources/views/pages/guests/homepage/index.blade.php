@extends('layouts.main.index')
@section('titlePage', 'Awan Laundry Express')

@section('head-style-field')
<link rel="stylesheet" href="{{ asset('assets/css/homepage/middle-content.css') }}">

@endsection

@section('main-content')
    <main class="min-h-[100vh] mt-6">
        <!--
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
    -->
        <section class="mt-12 flex w-full bg-white">
            <div class="flex items-center justify-center w-1/3">
                <img src="{{asset('assets/components/icon/kurirhome.png')}}" alt="Kurir Icon" class="w-72 transform -rotate-10">
            </div>
            <div class="w-2/3 pl-5">
                <div class="h-3/5">
                    <div class="w-3/5">
                        <p class="text-[#0493CC] text-3xl font-bold">
                            APLIKASI PEMESANAN LAUNDRY EXPRESS DELIVERY
                        </p>
                    </div>
                </div>
                <div class="h-1/5 flex items-center">
                    <a href="{{ route('loginIndex') }}" class="block cursor-pointer px-16 py-2 rounded-full bg-[#FF3377] text-white font-bold">
                        Login
                    </a>
                </div>
                <div class="xl:flex h-1/5 items-center">
                    <ul class="flex items-center gap-6 text-[#777676] text-lg">
                        <li>
                            <div class="flex items-center justify-center w-10 h-10 bg-white border border-[#D9D9D9] rounded-xl">
                                <img src="{{asset('assets/components/icon/bag-shopping.png')}}" alt="Bag Shopping" class="w-5">
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center justify-center w-10 h-10 bg-white border border-[#D9D9D9] rounded-xl">
                                <img src="{{asset('assets/components/icon/cart-shopping.png')}}" alt="Cart Shopping" class="w-5">
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center justify-center w-10 h-10 bg-white border border-[#D9D9D9] rounded-xl">
                                <img src="{{asset('assets/components/icon/motorcycle.png')}}" alt="Motorcycle" class="w-5">
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        <section class="mt-5 flex w-full  h-[350px] bg-gradient-to-b from-[#05B8FF] to-transparent relative">
            <div class="w-1/2 flex flex-col justify-center">
                <div class="w-4/5 ml-36 -mt-32">
                    <p class="text-2xl font-bold text-white">
                        PESAN LAUNDRY EXPRESS TANPA RIBET DATENG KE TEMPAT ?
                    </p>
                    <p class="w-3/5 text-sm text-white">
                        Awan Laundry Express memberikan solusi untuk mempermudah proses pemesanan layanan laundry express dengan banyak promo dan layanan
                    </p>
                </div>
            </div>
            <div class="h-72 flex items-center justify-end absolute right-3 -top-1/2 -translate-x-3  translate-y-[15%]">
                <div class="cSpecialFUser">
                    <div class="headSpecial text-xl ml-[10%]">
                        <div class="tx text-[#FF3377] italic font-black" style="text-shadow: 0 4px 2px rgba(0, 0, 0, 0.2)">
                            <h2>Promo Spesial Untukmu</h2>
                        </div>
                    </div>
                    <div class="ctr-specialList mt-1 bg-white shadow-md mx-auto w-96 h-56 border-[3px]  p-2 rounded-xl" data-carousel="slide">
                        <div class="cSpecialList h-full relative">
                            <div class="ctr-cSpecialList h-full overflow-hidden box-border">
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
                                                    <img src="{{asset('assets/img/dumb/imgtemp ' . $i+1 . '.jpg')}}" alt="" class="h-full w-full object-cover object-center">
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
        </section>
        
        <section class="middle-conten flex">
            <div class="fst-middle-content w-full h-full flex">
                <div class="middle-st-left w-1/3 flex justify-center">
                    <div class="diamond-gradient bg-gradient-to-r from-pink-500 to-blue-500 ">
                        <div class="diamond-gradient-in w-full h-full flex justify-center items-center">
                            <div class="text-diamond">
                                <div class="headline-diamond text-white text-2xl font-bold tracking-wide">
                                    Penawaran Spesial
                                </div>
                                <div class="subline-diamond text-white text-xs mt-4">
                                    Temukan lebih banyak penawaran promo yang didapatkan untuk Anda menghemat biaya laundry.
                                </div>
                            </div>
                        </div>
                        <div class="btn-swipe-mid flex justify-end mt-2 mr-2">
                            <button class="btn-swipe-right w-9 h-9 bg-blue-500 rounded-full text-white flex items-center justify-center">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            <button class="btn-swipe-left w-9 h-9 bg-blue-500 rounded-full text-white flex items-center justify-center">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="middle-st-right w-2/3 flex space-x-3">
                    <div class="mid-container w-64 h-80 bg-white rounded-lg shadow-md">
                        <div class="md-cont-top h-10 bg-blue-500 text-white rounded-t-lg flex justify-center items-center font-bold">
                            Kiloan duar
                        </div>
                        <div class="md-cont-midst h-28 p-2">
                            <div class="text-midst bg-gray-300 rounded-lg h-full"></div>
                        </div>
                        <div class="md-cont-midnd h-20 flex justify-center items-center">
                            <table>
                                <tr style="height:30px">
                                    <td style="width: 50px height:30px">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/store.png')}}" alt="" class="object-cover object-center w-5">
                                        </div>
                                    </td>
                                    <td style="font-size: 12px">Tenggat Promo</td>
                                </tr>
                                <tr>
                                    <td style="width: 50px">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/clock-regular.png')}}" alt="" class="object-cover object-center w-5">
                                        </div></td>
                                    <td style="font-size: 12px">Nama Toko</td>
                                </tr>
                            </table>
                        </div>
                        <div class="md-cont-midtd p-2 h-10 flex justify-center">
                            <div class="btn-midtd w-full">
                                <button class="w-full p-2 flex justify-center items-center text-sm font-bold h-8 bg-pink-500 text-white rounded-lg shadow-md hover:bg-pink-600 hover:text-gray-100">
                                    Gunakan Sekarang
                                </button>
                            </div>
                        </div>
                        <div class="md-cont-bottom h-12 flex justify-center items-center text-sm font-bold">
                            Lihat Detail
                        </div>
                    </div>
                    <div class="mid-container w-64 h-80 bg-white rounded-lg shadow-md">
                        <div class="md-cont-top h-10 bg-blue-500 text-white rounded-t-lg flex justify-center items-center font-bold">
                            Kiloan duar
                        </div>
                        <div class="md-cont-midst h-28 p-2">
                            <div class="text-midst bg-gray-300 rounded-lg h-full"></div>
                        </div>
                        <div class="md-cont-midnd h-20 flex justify-center items-center">
                            <table>
                                <tr style="height:30px">
                                    <td style="width: 50px height:30px">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/store.png')}}" alt="" class="object-cover object-center w-5">
                                        </div>
                                    </td>
                                    <td style="font-size: 12px">Tenggat Promo</td>
                                </tr>
                                <tr>
                                    <td style="width: 50px">
                                        <div class="btm-icon">
                                            <img src="{{asset('assets/components/icon/clock-regular.png')}}" alt="" class="object-cover object-center w-5">
                                        </div></td>
                                    <td style="font-size: 12px">Nama Toko</td>
                                </tr>
                            </table>
                        </div>
                        <div class="md-cont-midtd p-2 h-10 flex justify-center">
                            <div class="btn-midtd w-full">
                                <button class="w-full p-2 flex justify-center items-center text-sm font-bold h-8 bg-pink-500 text-white rounded-lg shadow-md hover:bg-pink-600 hover:text-gray-100">
                                    Gunakan Sekarang
                                </button>
                            </div>
                        </div>
                        <div class="md-cont-bottom h-12 flex justify-center items-center text-sm font-bold">
                            Lihat Detail
                        </div>
                    </div>   
                </div>
            </div>
        </section>
        
        <section class="middle-conten-nd flex justify-center w-full mt-[30PX]">
            <div class="scnd-middle-content flex w-11/12 md:w-3/4 lg:w-2/3 xl:w-1/2 h-96 mt-30">
                <div class="scnd-mid-left w-2/5 flex justify-center">
                    <div class="text-ndmid w-4/5 h-3/4 flex flex-col items-center pt-16">
                        <div class="hdline-ndmid text-2xl font-bold">
                            <p>Pilih Layanan yang tepat untuk anda</p>
                        </div>
                        <div class="sbline-ndmid text-sm">
                            <p>Dapatkan layanan yang tepat untuk keperluan anda</p>
                        </div>
                    </div>
                </div>
                <div class="scnd-mid-right flex space-x-2 w-3/5">
                    <div class="container-right h-80 w-64 mx-auto border-2 border-gray-300 rounded-lg shadow-md">
                        <div class="top-cont h-3/5 bg-gray-200 rounded-t-lg flex justify-center">
                            <img src="{{asset('assets/components/pages/packClothes.png')}}" alt="" class="object-cover object-center  h-[200px]">
                        </div>
                        <div class="mid-cont h-2/5 p-2">
                            <div class="text-hdln text-lg font-bold">Jenis Layanan</div>
                            <div class="text-predikat text-sm">Lorem lorem lorem lorem Lorem lorem lorem lorem Lorem lorem lorem lorem Lorem lorem lorem lorem</div>
                        </div>
                        <div class="bottom-cont h-1/5">
                            <div class="btn-view">
                                <button class="w-full p-2 flex justify-center items-center text-sm font-bold h-8 mt-3 bg-white text-black rounded-lg shadow-md hover:bg-pink-600 hover:text-gray-100">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="container-right h-80 w-64 mx-auto border-2 border-gray-300 rounded-lg shadow-md">
                        <div class="top-cont h-3/5 bg-gray-200 rounded-t-lg">
                            <img src="{{asset('assets/components/pages/shirt.webp')}}" alt="" class="object-cover object-center h-[200px]">
                        </div>
                        <div class="mid-cont h-2/5 p-2">
                            <div class="text-hdln text-lg font-bold">Jenis Layanan</div>
                            <div class="text-predikat text-sm">Lorem lorem lorem lorem Lorem lorem lorem lorem Lorem lorem lorem lorem Lorem lorem lorem lorem</div>
                        </div>
                        <div class="bottom-cont h-1/5">
                            <div class="btn-view">
                                <button class="w-full p-2 flex justify-center items-center text-sm font-bold h-8 mt-3 bg-white text-black rounded-lg shadow-md hover:bg-pink-600 hover:text-gray-100">Lihat Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="middle-content-third flex justify-center mt-8">
            <div class="mid-third flex bg-[#0587FF] rounded-xl w-3/4 h-72">
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
        <section class="flex justify-center py-5">
            <div class="flex w-11/12 lg:w-4/5 h-80 mt-5">
                <div class="flex justify-center w-2/5">
                    <div class="w-3/5 flex flex-col items-center">
                        <div class="flex justify-center text-2xl font-bold text-black mt-12">
                            <p>Ada Pertanyaan? Tanyakan Pada Kami!</p>
                        </div>
                        <div class="flex mt-5 w-full">
                            <button class="w-full h-12 bg-pink-500 text-white font-bold text-lg rounded-lg hover:bg-pink-700">
                                Lihat Selengkapnya
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end w-3/5">
                    <div class="w-[75%] h-64 flex justify-center items-center rounded-tl-[17%] rounded-br-[17%] bg-gradient-to-tr from-[#05B8FF] to-[#FF3377]">
                        <p class="text-white text-[20px] font-bold text-center">YUUUUUUUUUUUUUUK Bagi yang penasaran Boleh Tanya tanya kami</p>
                    </div>
                </div>
            </div>
        </section>        
    </main>
@endsection

@section('popup-content-field')
    
@endsection

@section('script-field')
    
@endsection