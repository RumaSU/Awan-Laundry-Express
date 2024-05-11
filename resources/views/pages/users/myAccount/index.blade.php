@extends('layouts.user.index')
@section('titlePage', 'Akun saya')

@section('head-field')
    
@endsection

@section('main-content-user')
    <div class="ctr-summUser pt-4 pb-12 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
        <div class="summaryUser">
            <div class="ctr-userProfile p-3 bg-white w-fit rounded-md border border-[#9D9D9D] shadow-sm shadow-gray-400">
                <div class="userProfile flex items-center justify-between">
                    <div class="ctr-lftPhoName flex items-center gap-4">
                        <div class="ctr-photoUser">
                            <div class="cPhotoUser w-20 aspect-square rounded-lg p-1.5 border-2 border-[#D9D9D9]">
                                <img src="{{asset('assets/img/icon/layer.png')}}" alt="" class="object-cover object-center">
                            </div>
                        </div>
                        <div class="ctr-nameUser w-48 md:w-60 xl:w-72">
                            <div class="cNameUser -space-y-1">
                                <div class="nameUser">
                                    <div class="txNmU text-lg font-light line-clamp-2">
                                        <p>
                                            @{{Nama User}}
                                        </p>
                                    </div>
                                </div>
                                <div class="emailUser">
                                    <div class="txEmU text-sm line-clamp-1">
                                        <p>@{{emailuser@gmail.com}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-rghtSett">
                        <div class="ctr-setting">
                            <div class="cSetting">
                                <a href="" class="flex items-center justify-center w-14 aspect-square border border-[#9D9D9D] rounded-lg">
                                    <div class="icn">
                                        <span class="icnSettings text-[#9D9D9D] text-3xl">
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
                                    <div class="labelOut -space-y-2 text-[#747474]">
                                        <div class="tx-lblT">
                                            <div class="txT text-sm">
                                                <p>Catatan Keuangan</p>
                                            </div>
                                        </div>
                                        <div class="tx-lblB">
                                            <div class="txB text-lg">
                                                <p>Uang Keluar</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalMoney flex justify-end">
                            <div class="cTotalMoney w-4/5 bg-[#FF8777] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalMoney text-[#500A00] text-lg text-right font-bold">
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
                                            <div class="txT text-lg">
                                                <p>Promo</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ctr-totalPromo flex justify-end">
                            <div class="cTotalPromo w-4/5 bg-[#FFC978] px-1.5 py-2 rounded-tl-3xl">
                                <div class="txTotalPromo text-[#500A00] text-lg font-bold">
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
    <div class="ctr-specialForUser mt-10">
        <div class="cSpecialFUser">
            <div class="headSpecial ml-[2.5%]">
                <div class="tx text-[#FF3377] italic font-black" style="text-shadow: 0 4px 2px rgba(0, 0, 0, 0.2)">
                    <h2>Spesial Untukmu</h2>
                </div>
            </div>
            <div class="ctr-specialList mt-0.5 mx-auto w-[95%] h-44 border-[3px] border-gray-400 p-2 rounded-xl">
                <div class="cSpecialList h-full relative border border-black">
                    <div class="ctr-cSpecialList h-full overflow box-border">
                        <div class="cLstSpecial flex items-center h-full relative">
                            <div class="ctr-spcItm absolute w-full h-full transition-all translate-x-[0]">
                                <div class="cSpecialItm1 h-full">
                                    <div class="pctSpc h-full">
                                        <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-spcItm absolute w-full h-full transition-all translate-x-[100%]">
                                <div class="cSpecialItm2 h-full">
                                    <div class="pctSpc h-full">
                                        <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                            <div class="ctr-spcItm absolute w-full h-full transition-all translate-x-[200%]">
                                <div class="cSpecialItm3 h-full">
                                    <div class="pctSpc h-full">
                                        <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="h-full w-full object-cover object-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-nxtBckSpcList text-4xl text-[#3A3A3A]">
                        <div class="ctr-backSpc py-2 px-1 border border-black absolute z-10 left-0 top-1/2 -translate-y-1/2">
                            <div class="cBackSpecial">
                                <span class="icn-chevLft">
                                    <i class="fa-solid fa-chevron-left"></i>
                                </span>
                            </div>
                        </div>
                        <div class="ctr-nextSpc py-2 px-1 border border-black absolute z-10 right-0 top-1/2 -translate-y-1/2">
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
    <div class="ctr-lstTransaction">
        
    </div>
@endsection

@section('script-field')
    {{-- <script src="{{asset('assets/js/pages/users/myAccount/autoSwipeSpecial.js')}}"></script> --}}
@endsection