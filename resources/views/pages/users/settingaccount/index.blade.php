@extends('layouts.user.index')
@section('titlePage', 'Akun saya')

@section('head-link-field')
    <link rel="stylesheet" href="{{ asset('assets/css/users/setting.css') }}">
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

        .cCTransactionItm {
            display: block;
        }
        .txTimeTras {
            font-size: 0.65rem;
            line-height: 0.85rem;
        }
        
        @media only screen and (min-width: 321px) {
            .cCTransactionItm {
                display: flex;
            }
            .txTimeTras {
                font-size: 0.75rem;
                line-height: 1rem;                
            }
        }
    </style>
@endsection

@section('main-content-user')
    <div class="ctr-summUser pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
        <div class="summaryUser">
            <div class="ctr-userProfile p-3 bg-white w-full md:w-fit rounded-md border border-[#9D9D9D] shadow-sm shadow-gray-400">
                <div class="userProfile flex items-center justify-between relative overflow-hidden">
                    <div class="ctr-lftPhoName flex items-center gap-4">
                        <div class="ctr-photoUser">
                            <div class="cPhotoUser w-20 aspect-square rounded-lg p-1.5 border-2 border-[#D9D9D9]">
                                <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
                            </div>
                        </div>
                        <div class="ctr-nameUser w-full md:w-60 xl:w-72">
                            <div class="cNameUser md:-space-y-1">
                                <div class="nameUser">
                                    <div class="txNmU text-sm md:text-lg font-light line-clamp-1">
                                        <p>
                                            @{{Nama User}}
                                            @{{Nama User}}
                                        </p>
                                    </div>
                                </div>
                                <div class="emailUser">
                                    <div class="txEmU text-xs md:text-sm line-clamp-1">
                                        <p>@{{emailuser@gmail.com}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-rghtSett absolute  sm:relative top-0 right-0">
                        <div class="ctr-setting">
                            <div class="cSetting">
                                <a href="" class="flex items-center justify-center w-10 md:w-14 aspect-square bg-white border border-[#9D9D9D] rounded-lg">
                                    <div class="icn">
                                        <span class="icnSettings text-[#9D9D9D] text-xl md:text-2xl lg:text-3xl">
                                            <i class="fa-solid fa-gear"></i>
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctrMonyPromo mt-4 flex flex-col lg:flex-row gap-4">
                <div class="ctr-moneyOut bg-white lg:w-fit overflow-hidden rounded-md">
                    <div class="cMoneyOut *:select-none">
                        <div class="ctr-labelMoneyOut p-3 flex items-center gap-4">
                            <div class="ctr-iconOut">
                                <div class="cIconOut flex items-center justify-center w-14 aspect-square bg-[#FF1F00] rounded-lg">
                                    <div class="icnOut">
                                        <span class="icn text-white text-3xl">
                                            <i class="fa-solid fa-arrow-up-long"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-labelOut w-40 md:w-52 xl:w-64">
                                <div class="cLabelOut">
                                    <div class="labelOut -space-y-1 md:-space-y-2 text-[#747474]">
                                        <div class="tx-lblT">
                                            <div class="txT text-xs md:text-sm">
                                                <p>Catatan Keuangan</p>
                                            </div>
                                        </div>
                                        <div class="tx-lblB">
                                            <div class="txB text-base md:text-lg">
                                                <p>Uang Keluar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalMoney flex justify-end">
                            <div class="cTotalMoney w-4/5 bg-[#FF8777] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalMoney text-[#500A00] text-sm md:text-base lg:text-lg text-right font-bold">
                                    <p>Rp @{{800.000}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ctr-promo bg-[#B96F00] lg:w-fit overflow-hidden rounded-md shadow-sm hover:shadow-gray-400">
                    <div class="cPromo select-none">
                        <div class="ctr-labelPromo p-3 flex items-center gap-4">
                            <div class="ctr-iconOut">
                                <div class="cIconOut flex items-center justify-center w-14 aspect-square bg-[#EB8E02] rounded-lg">
                                    <div class="icnOut">
                                        <span class="icn text-[#6F4200] text-3xl">
                                            <i class="fa-solid fas fa-bullhorn"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-labelOut w-40 md:w-52 xl:w-64">
                                <div class="cLabelOut">
                                    <div class="labelOut -space-y-2 text-[#FFDFAF]">
                                        <div class="tx-lblT">
                                            <div class="txT text-base md:text-lg">
                                                <p>Promo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalPromo flex justify-end">
                            <div class="cTotalPromo w-4/5 bg-[#FFC978] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalPromo text-[#500A00] text-sm md:text-base lg:text-lg font-bold">
                                    <a href="" class="float-right">
                                        <p>@{{5}} Promo</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="setheader">
        <div class="set-nav">
            <div class="tittle-set">
                <p>Pengaturan Akun</p>
            </div>
            <div class="button-set">
                <button class="biodat">Biodata Diri</button>
                <button class="alamat">Alamat</button>
                <button class="ubahpw">Ubah Password</button>
            </div>
        </div>
        <div class="set-main">
            <div class="main-biodata">
                <div class="bd-profil">
                    <div class="foto-profil">
                        <img src="{{asset('assets/components/icon/layer.png')}}" alt="">
                    </div>
                    <div class="pilih-profil">
                        <button type="button">Pilih Profil</button>
                    </div>
                    <div class="warning-profil">
                        <p>Maksimal file diunggah 10 MB (Megabytes)</p>
                        <P>Type File : JPG, PNG, JPEG</P>
                    </div>
                </div>
                <div class="bd-edit">
                    <div class="table-bd">
                        <div class="judul-bio">
                            <p>Ubah Biodata Diri</p>
                        </div>
                        <table class="biodatadiri" border: 1>
                            <tr>
                                <td class="kolom1">Nama</td>
                                <td class="kolom2">Nama User</td>
                                <td class="kolom3">
                                    <div class="edit">
                                        <p>Ubah</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="kolom1">Jenis Kelamin</td>
                                <td>Laki-Laki</td>
                                <td>
                                    <div class="edit">
                                        <p>Ubah</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="kolom1">Tanggal Lahir</td>
                                <td>19 Desember 2024</td>
                                <td>
                                    <div class="edit">
                                        <p>Ubah</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        
                    </div>
                    <div class="table-kontak">
                        <div class="judul-kontak">
                            <p>Ubah Kontak</p>
                        </div>
                        <table class="kontak" border: 1>
                            <tr>
                                <td class="kolom1">Email</td>
                                <td class="kolom2">emailuser123@gmail.com</td>
                                <td>
                                    <div class="edit">
                                        <p>Ubah</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="kolom1">No Handphone</td>
                                <td>081234567890</td>
                                <td>
                                    <div class="edit">
                                        <p>Ubah</p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="main-alamat">

            </div>
            <div class="main-ubahpw">

            </div>
        </div>
    </div>
    
@endsection

@section('script-field')
    {{-- <script src="{{asset('assets/js/pages/users/myAccount/autoSwipeSpecial.js')}}"></script> --}}
@endsection