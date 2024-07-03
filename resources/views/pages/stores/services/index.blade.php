@extends('layouts.store.index')
@section('titlePage', 'Toko - Layanan')

@section('head-link-field')

@endsection

@section('head-style-field')
    
@endsection

@section('main-content-store')
    <div class="ctr-services mt-8">
        <div class="cServices">
            <div class="ctr-headServices">
                <div class="cHeadServices flex flex-col md:flex-row md:items-center justify-between gap-4 md:gap-0">
                    <div class="ctr-titlServ shrink-0">
                        <div class="cTitlServ">
                            <div class="titleServ ml-[3%] md:ml-[7%]">
                                <div class="tx text-xl font-bold">
                                    <h2>Layanan</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ctr-listServcStore mt-4 px-4">
                <div class="cListServcStore">
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        {{-- <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[542px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[542px]:aspect-square min-[542px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Kiloan</h2>
                                                    </div>
                                                </div>
                                                <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                    {{-- <div class="txDVlTServc">
                                                        <p>Per 1 kg : {{ (rand(50, 100) * 100) }}</p>
                                                    </div> --}}
                                                    <div class="lblDatThsServc">
                                                        <div class="tx">
                                                            <p>Per kg :</p>
                                                        </div>
                                                    </div>
                                                    <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                        {{-- <div class="txOtptDtThsServc">
                                                            <div class="tx">
                                                                <p>Rp. {{ number_format(rand(50, 100)*100) }}</p>
                                                            </div>
                                                        </div> --}}
                                                        <div class="inpFldDtValThsServc flex items-center gap-2">
                                                            <div class="lblInpThsServc">
                                                                <label for="">
                                                                    <p>Rp. </p>
                                                                </label>
                                                            </div>
                                                            <div class="inpFld block">
                                                                <input type="text" name="" id="" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                    <div class="actvteThsServc">
                                                        <label for="actvThsKilosServc" class="block w-fit mt-2">
                                                            <div class="ctr-thsServcActv">
                                                                <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                    <input type="checkbox" name="" id="actvThsKilosServc" class="peer sr-only">
                                                                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="saveThsServc mt-2">
                                                        <button class="btn-sveServc border border-black px-4 py-2 rounded-lg">
                                                            <div class="cBtnSve flex items-center gap-2">
                                                                <div class="icnSve">
                                                                    <span class="icn">
                                                                        <i class="far fa-floppy-disk"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="lbelSave">
                                                                    <div class="tx">
                                                                        <p>Simpan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        {{-- <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[542px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[542px]:aspect-square min-[542px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc flex justify-between items-center">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Satuan</h2>
                                                    </div>
                                                    <button type="button" class="addNewClothesServc border border-black rounded-lg flex items-center gap-2 px-4 py-2 text-sm">
                                                        <span class="icnAdd">
                                                            <i class="fa-solid fa-plus"></i>
                                                        </span>
                                                        <div class="txAddClths">
                                                            <p>Tambah Pakaian</p>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div class="ctr-listDetClthsServc mt-2 max-h-64 pr-2 overflow-y-scroll">
                                                    <div class="cListDetClthsServc sm:space-y-1 space-y-3 text-xs sm:text-sm">
                                                        @php
                                                            $limitLoop = rand(0, 15);
                                                            $countActiveServc = 0;
                                                        @endphp
                                                        @if ($limitLoop > 0)
                                                            @for ($i = 0; $i < $limitLoop; $i++)
                                                                @php
                                                                    $tempUUID = Str::uuid();
                                                                    $tempIsActive = rand(0, 1);
                                                                    $tempIsActive ? $countActiveServc++ : $countActiveServc;
                                                                @endphp
                                                                <div class="itm-detServc flex flex-col sm:flex-row gap-2 p-2 rounded-xl border-2 border-gray-400 has-[:checked]:border-pink-300 has-[:checked]:bg-pink-200 group overflow-hidden" data-idServcClothes="{{ $tempUUID }}">
                                                                    <div class="detServc w-full flex items-center gap-2">
                                                                        <div class="actvThsServc">
                                                                            <input type="checkbox" name="checkActvThsClthsServc" id="" class="checkActvThsClthsServc rounded-[100%] p-2" {{ $tempIsActive ? 'checked' : '' }}>
                                                                        </div>
                                                                        <div class="nmePrcDtServc flex w-full md:items-center justify-between gap-2 flex-col md:flex-row">
                                                                            <div class="nmeDtServc max-md:w-full">
                                                                                <div class="valDatThsServc font-semibold w-full">
                                                                                    <div class="inpFldDtValThsServc w-full flex items-center gap-2">
                                                                                        <div class="inpFld block w-full">
                                                                                            <input 
                                                                                                type="text" 
                                                                                                name="inpNmeClthsServc-{{ $i }}" 
                                                                                                id="inpNmeClthsServc-{{ $i }}" 
                                                                                                class="block px-1.5 py-1 rounded-md w-full text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none group-has-[:checked]:bg-pink-50" 
                                                                                                spellcheck="false"
                                                                                                value="Baju {{ $i+1 }}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="prcDtServc max-md:w-full font-semibold text-[#FF3377] group-has-[:checked]:bg-pink-50 px-2 rounded-md">
                                                                                <div class="inpFldDtValThsServc w-full flex items-center gap-2">
                                                                                    <div class="lblInpThsServc">
                                                                                        <label for="">
                                                                                            <p>Rp. </p>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inpFld block w-full">
                                                                                        <input 
                                                                                            type="text" 
                                                                                            name="inpPrcClthsServc-{{ $i }}" 
                                                                                            id="inpPrcClthsServc-{{ $i }}" 
                                                                                            class="priceInpThsServc block px-1.5 py-1 w-full rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" 
                                                                                            spellcheck="false"
                                                                                            value="{{ rand(70,180)*100 }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="delThsServc mt-2 block">
                                                                        <button type="button" class="btn-delClthsServc w-full text-center border border-black px-4 py-2 rounded-lg">
                                                                            <div class="cBtnSve flex justify-center items-center gap-2">
                                                                                <div class="icnSve">
                                                                                    <span class="icn">
                                                                                        <i class="fas fa-trash"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="lbelSave sm:hidden">
                                                                                    <div class="tx">
                                                                                        <p>Hapus</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            @endfor
                                                            
                                                        @else
                                                            <div class="noItm-detServc flex flex-col items-center justify-center gap-2 p-2 rounded-xl border-2 border-gray-400"><div class="icnQuestion"><span class="icn text-3xl"><i class="far fa-circle-question"></i></span></div><div class="txQst"><p>Tidak ada pakaian yang ada</p></div></div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                    <div class="actvteAllThsServc">
                                                        <label for="actvAllThsClthsServc" class="block w-fit mt-2">
                                                            <div class="ctr-thsServcActv">
                                                                <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                    <input type="checkbox" name="" id="actvAllThsClthsServc" class="peer sr-only" {{ $limitLoop > 0 && $countActiveServc === $limitLoop ? 'checked' : '' }}>
                                                                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="saveThsServc mt-2">
                                                        <button class="btn-sveServc border border-black px-4 py-2 rounded-lg">
                                                            <div class="cBtnSve flex items-center gap-2">
                                                                <div class="icnSve">
                                                                    <span class="icn">
                                                                        <i class="far fa-floppy-disk"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="lbelSave">
                                                                    <div class="tx">
                                                                        <p>Simpan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        {{-- <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Meteran</h2>
                                                    </div>
                                                </div>
                                                <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                    {{-- <div class="txDVlTServc">
                                                        <p>Per 1 kg : {{ (rand(50, 100) * 100) }}</p>
                                                    </div> --}}
                                                    <div class="lblDatThsServc">
                                                        <div class="tx">
                                                            <p>Per meter :</p>
                                                        </div>
                                                    </div>
                                                    <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                        {{-- <div class="txOtptDtThsServc">
                                                            <div class="tx">
                                                                <p>Rp. {{ number_format(rand(50, 100)*100) }}</p>
                                                            </div>
                                                        </div> --}}
                                                        <div class="inpFldDtValThsServc flex items-center gap-2">
                                                            <div class="lblInpThsServc">
                                                                <label for="">
                                                                    <p>Rp. </p>
                                                                </label>
                                                            </div>
                                                            <div class="inpFld block">
                                                                <input type="text" name="" id="" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                    <div class="actvteThsServc">
                                                        <label for="actvThsKilosServc" class="block w-fit mt-2">
                                                            <div class="ctr-thsServcActv">
                                                                <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                    <input type="checkbox" name="" id="actvThsKilosServc" class="peer sr-only">
                                                                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="saveThsServc mt-2">
                                                        <button class="btn-sveServc border border-black px-4 py-2 rounded-lg">
                                                            <div class="cBtnSve flex items-center gap-2">
                                                                <div class="icnSve">
                                                                    <span class="icn">
                                                                        <i class="far fa-floppy-disk"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="lbelSave">
                                                                    <div class="tx">
                                                                        <p>Simpan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                    <div class="ctr-servcItm  relative mb-6 md:mb-4">
                        <div class="ctr-cServcItm border-2 border-gray-400 rounded-xl shadow-md shadow-gray-400 bg-white overflow-hidden">
                            <div class="cServcItm py-4 px-6">
                                <div class="ctr-headServcItm">
                                    <div class="cHeadServcItm flex items-center justify-between selectDisable">
                                        {{-- <div class="ctr-lftEdit relative hover:brightness-90">
                                            <div class="cLftEdit px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Edit</strong>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="ctr-lft relative hover:brightness-90">
                                            <div class="cLft px-4 md:px-8 py-2 text-xs md:text-sm text-gray-800 bg-[#D9D9D9] rounded-lg">
                                                <div class="tx">
                                                    <strong>Layanan</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtStatus">
                                            <div class="cStatusServc px-4 md:px-8 py-2 rounded-xl bg-[#D9D9D9] text-gray-800 ">
                                                <div class="txSt text-xs md:text-sm">
                                                    <strong>@{{Aktif}}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ctr-cTrscItm mt-4">
                                    <div class="cCServcItm gap-6 min-[465px]:flex">
                                        <div class="ctr-lftImg flex-shrink-0">
                                            <div class="cLftImage">
                                                <div class="imageServc aspect-video min-[465px]:aspect-square min-[465px]:w-24 rounded-xl overflow-hidden">
                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ctr-rghtDetServc w-full max-[542px]:mt-2">
                                            <div class="cDetServc select-none">
                                                <div class="headDetServc">
                                                    <div class="txHDet md:text-xl font-bold">
                                                        <h2>Ongkir</h2>
                                                    </div>
                                                </div>
                                                <div class="cDatValThsServc flex items-center flex-wrap gap-1 text-sm sm:text-base">
                                                    {{-- <div class="txDVlTServc">
                                                        <p>Per 1 kg : {{ (rand(50, 100) * 100) }}</p>
                                                    </div> --}}
                                                    <div class="lblDatThsServc">
                                                        <div class="tx">
                                                            <p>Per KM :</p>
                                                        </div>
                                                    </div>
                                                    <div class="valDatThsServc font-semibold text-[#FF3377]">
                                                        {{-- <div class="txOtptDtThsServc">
                                                            <div class="tx">
                                                                <p>Rp. {{ number_format(rand(50, 100)*100) }}</p>
                                                            </div>
                                                        </div> --}}
                                                        <div class="inpFldDtValThsServc flex items-center gap-2">
                                                            <div class="lblInpThsServc">
                                                                <label for="">
                                                                    <p>Rp. </p>
                                                                </label>
                                                            </div>
                                                            <div class="inpFld block">
                                                                <input type="text" name="" id="" class="priceInpThsServc block px-1.5 py-1 rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" spellcheck="false">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actvteNdSaveThsServc flex items-center justify-between">
                                                    <div class="actvteThsServc">
                                                        <label for="actvThsKilosServc" class="block w-fit mt-2">
                                                            <div class="ctr-thsServcActv">
                                                                <div class="cThsServcActv block w-16 h-6 rounded-full cursor-pointer border border-black relative bg-white has-[:checked]:bg-[#ff92b6] has-[:checked]:border-pink-700 *:transition-all">
                                                                    <input type="checkbox" name="" id="actvThsKilosServc" class="peer sr-only">
                                                                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="saveThsServc mt-2">
                                                        <button class="btn-sveServc border border-black px-4 py-2 rounded-lg">
                                                            <div class="cBtnSve flex items-center gap-2">
                                                                <div class="icnSve">
                                                                    <span class="icn">
                                                                        <i class="far fa-floppy-disk"></i>
                                                                    </span>
                                                                </div>
                                                                <div class="lbelSave">
                                                                    <div class="tx">
                                                                        <p>Simpan</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="thsServcActv bg-gray-300 h-4 mx-4 rounded-t-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('different-content-store')
    {{-- <div class="mdl-confDelCltshSrvc fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
        <div class="cMdlConfDel rounded-lg p-8 bg-white shadow-sm shadow-black flex flex-col items-center justify-center">
            <div class="icnDel">
                <span class="icn text-3xl text-red-600">
                    <i class="fas fa-circle-exclamation"></i>
                </span>
            </div>
            <div class="warnDel mt-2">
                <div class="txWarn">
                    <p>Konfirmasi untuk menghapus layanan untuk pakaian</p>
                </div>
            </div>
            <div class="confirCancel">
                <div class="cancelDel">
                    
                </div>
                <div class="confirDel">
                    
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@section('popup-content-field')
    {{-- @php
        $totalPriceTransaction = 0;
        $randShpp = rand(90, 170) * 100;
        $getDiscountTransaction = rand(1, 100) / 100;
    @endphp
    @include('pages.stores.promo.shwMdlDetPromo')
    @include('pages.stores.promo.shwMdlCrtPromo') --}}
    {{-- @include('pages.stores.services.shwMdlServc') --}}
@endsection

@section('script-field')
    <script src="{{asset('assets/js/pages/stores/promo/mdPromo.js')}}"></script>
    <script src="{{asset('assets/js/pages/stores/orders/mdOrd.js')}}"></script>
    <script src="{{ asset('assets/js/pages/stores/promo/mdCrtPromo.js') }}"></script>
    <script src="{{ asset('assets/js/pages/stores/services/addServc.js') }}"></script>
    {{-- <script>
        document.getElementById('DtUntlMdlCrtePrmo').addEventListener('click', function() {
            document.getElementById('DtUntlMdlCrtePrmo').focus();
            document.getElementById('DtUntlMdlCrtePrmo').click();
        });
    </script> --}}
@endsection
