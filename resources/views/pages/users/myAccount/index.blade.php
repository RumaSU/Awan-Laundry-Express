@extends('layouts.user.index')
@section('titlePage', 'Akun saya')

@section('head-field')
    
@endsection

@section('main-content-user')
    <div class="ctr-summUser py-4 px-8 bg-gradient-to-b from-[#05B8FF] to-transparent">
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
                <div class="ctr-moneyOut bg-white lg:w-fit overflow-hidden rounded-md shadow-sm shadow-gray-400">
                    <div class="cMoneyOut">
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
                <div class="ctr-promo bg-[#B96F00] lg:w-fit overflow-hidden rounded-md shadow-sm shadow-gray-400">
                    <div class="cPromo">
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
                                <div class="txTotalPromo text-[#500A00] text-lg text-right font-bold">
                                    <p>@{{5}} Promo</p>
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
                <div class="tx text-[#FF3377] italic font-black">
                    <h2 class="drop-shadow-lg shadow-gray-400">Spesial Untukmu</h2>
                </div>
            </div>
            <div class="ctr-specialList mt-0.5 mx-auto w-[95%] border-[3px] border-gray-400 p-2 rounded-xl">
                <div class="cSpecialList relative">
                    <div class="ctr-cSpecialList">
                        <div class="cLstSpecial">
                            <div class="ctr-spcItm1">
                                <div class="cSpecialItm1">
                                    <div class="pctSpc">
                                        <img src="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-nxtBckSpcList">
                        <div class="ctr-backSpc">
                            <div class="cBackSpecial">

                            </div>
                        </div>
                        <div class="ctr-nextSpc">
                            <div class="cNextSpecial"></div>
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
    
@endsection