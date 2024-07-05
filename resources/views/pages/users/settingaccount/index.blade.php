@extends('layouts.user.index')
@section('titlePage', 'Akun - Setting')

@section('head-link-field')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/users/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/users/set-alamat.css') }}">
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
                                            {{ Auth::user()->UserDetail->name }}
                                        </p>
                                    </div>
                                </div>
                                <div class="emailUser">
                                    <div class="txEmU text-xs md:text-sm line-clamp-1">
                                        <p>{{ Auth::user()->email }}</p>
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
    <div class="setheader block">
        <div class="set-nav">
            <div class="tittle-set text-lg font-bold">
                <p>Pengaturan Akun</p>
            </div>
            <div class="ctr-listSetting mt-5">
                <div class="cListSetting flex items-center bg-white font-semibold">
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] rounded-l-full hover:bg-[#FF3377] hover:text-white bg-[#FF3377] text-white" data-urlSetting="{{ route('user\settings\profile') }}">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Profile</p>
                            </div>
                        </div>
                    </a>
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] hover:bg-[#FF3377] hover:text-white bg-white text-black" data-urlSetting="{{ route('user\settings\address') }}">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Alamat</p>
                            </div>
                        </div>
                    </a>
                    <a class="settingAccountTo flex items-center justify-center w-64 py-1 transition-all border border-[rgb(233,233,233)] rounded-r-full hover:bg-[#FF3377] hover:text-white bg-white text-black" data-urlSetting="{{ route('user\settings\password') }}">
                        <div class="cHrefProfile">
                            <div class="tx">
                                <p>Ubah Password</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            {{-- <div class="button-set">
                <button class="biodata" onclick="showSection('biodata', this)">Biodata Diri</button>
                <button class="alamat" onclick="showSection('alamat', this)">Alamat</button>
                <button class="ubahpw" onclick="showSection('ubahpw', this)">Ubah Password</button>
            </div> --}}
        </div>
        <div class="ctr-mainSetting flex mt-8">
            <div class="cMainSetting w-full">
                @include('pages.users.settingaccount.profile')
            </div>
        </div>
        {{-- <div class="set-main">
            <div class="main-biodata">
                @include('pages.users.settingaccount.biodata')
            </div>
            <div class="main-alamat">
                @include('pages.users.settingaccount.alamat')
            </div>
            <div class="main-ubahpw">
                @include('pages.users.settingaccount.ubahpw')
            </div>
        </div> --}}
    </div>
    {{-- <div class="errIt"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"></div></div> --}}
    
@endsection

@section('popup-content-field')

@endsection

@section('script-field')
    <script src="{{ asset('assets/js/pages/users/settings/elm.js') }}"></script>
    <script src="{{ asset('assets/js/pages/users/settings/profile/elmP.js') }}"></script>
    <script src="{{ asset('assets/js/pages/users/settings/profile/cDt.js') }}"></script>
    
    <script src="{{ asset('assets/js/pages/users/settings/address/elmP.js') }}"></script>
    <script src="{{ asset('assets/js/pages/users/settings/address/cDt.js') }}"></script>
    {{-- <script>
        function getCsrfToken() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.sbmChangeDataUser').click((e) => {
            const $ELEMN_THS = $(e.target.closest('.formField'));
            const $ELEMN_PAR = $($ELEMN_THS.closest('.popoup'));
            
            console.log($ELEMN_PAR);
            $ELEMN_PAR.addClass('animate-pulse');
            const URL = $ELEMN_THS.attr('data-formUrl');
            
            let $IS_CHECKBOX = $ELEMN_THS.find('input[type="radio"]');
            
            let dataAjax = {};
            
            if ($IS_CHECKBOX.length > 0) {
                let $CHECKED_INP = $IS_CHECKBOX.filter(':checked');
                let NMERAD = $($CHECKED_INP[$CHECKED_INP.length-1]).attr('name');
                let VALRAD = $($CHECKED_INP[$CHECKED_INP.length-1]).val();
                
                dataAjax = Object.assign({}, dataAjax, { [NMERAD]: VALRAD });
            } else {
                let $INP_ELMN = $ELEMN_THS.find('input');
                $INP_ELMN.each(function (index, element) {
                    let NAME = $(element).attr('name');
                    let VAL = $(element).val();
                    dataAjax = Object.assign({}, dataAjax, { [NAME]: VAL });
                });
            }
            
            // console.log(dataAjax);
            $.ajax({
                type: "POST",
                url: URL,
                data: dataAjax,
                beforeSend: function() {
                    
                },
                success: function (response) {
                    console.log(response);
                    // alert('Sukses' + response.message);
                },
                complete: function() {
                    // alert('Complete');
                    $ELEMN_PAR.removeClass('active');
                    $ELEMN_PAR.removeClass('animate-pulse');
                },
                error: function(xhr) {
                    let response = xhr.responseJSON;
                    if (response.status === 'error') {
                        // Reset pesan error
                        $ELEMN_THS.find('.errorMessages').html('');
                        
                        if (response.errors) {
                            // Tampilkan pesan error validasi
                            for (let field in response.errors) {
                                response.errors[field].forEach(function(error) {
                                    // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + error + '</p>');
                                    $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + error + ' </div></div>');
                                });
                            }
                        } else if (response.message) {
                            // Tampilkan pesan error umum
                            // $ELEMN_THS.find('.errorMessages').append('<p class="error">' + response.message + '</p>');
                            $ELEMN_THS.find('.errorMessages').append('<div class="errIt flex gap-2"><span class="errIcn"><i class="fas fa-circle"></i></span><div class="tx"> ' + response.message + ' </div></div>');
                        }
                    }
                }
            });
        });
    </script> --}}
@endsection