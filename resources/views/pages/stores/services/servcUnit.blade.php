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
                {{-- <div class="itm-detServc flex flex-col sm:flex-row gap-2 p-2 rounded-xl border-2 border-gray-400 has-[:checked]:border-pink-300 has-[:checked]:bg-pink-200 group overflow-hidden" data-idServcClothes="{{ $tempUUID }}">
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
                                            value="{{ number_format(rand(70,180)*100) }}">
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
                </div> --}}
                <div class="itm-detServc flex flex-col sm:flex-row gap-2 p-2 rounded-xl border-2 border-gray-400 has-[:checked]:border-pink-300 has-[:checked]:bg-pink-200 group overflow-hidden" data-idServcClothes="{{ $tempUUID }}">
                    <div class="detServc w-full flex items-center gap-2">
                        <div class="actvThsServc">
                            <input type="checkbox" class="checkActvThsClthsServc rounded-[100%] p-2" {{ $tempIsActive ? 'checked' : '' }}>
                        </div>
                        <div class="nmePrcDtServc flex w-full md:items-center justify-between gap-2 flex-col md:flex-row">
                            <div class="nmeDtServc max-md:w-full">
                                <div class="valDatThsServc font-semibold w-full">
                                    <div class="inpFldDtValThsServc w-full flex items-center gap-2">
                                        <div class="inpFld block w-full">
                                            <input 
                                                type="text" 
                                                class="nameUnitThsServc block px-1.5 py-1 rounded-md w-full text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none group-has-[:checked]:bg-pink-50" 
                                                spellcheck="false"
                                                value="Baju {{ $i+1 }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prcDtServc max-md:w-full font-semibold text-[#FF3377] group-has-[:checked]:bg-pink-50 px-2 rounded-md">
                                <div class="inpFldDtValThsServc w-full flex items-center gap-2">
                                    <div class="lblInpThsServc">
                                        <div class="lblPrc">
                                            <p>Rp. </p>
                                        </div>
                                    </div>
                                    <div class="inpFld block w-full">
                                        <input 
                                            type="text" 
                                            class="priceInpThsServc block px-1.5 py-1 w-full rounded-md text-sm border-transparent focus:border-solid focus:border-gray-600 outline-none" 
                                            spellcheck="false"
                                            value="{{ number_format(rand(70,180)*100) }}">
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
                    <input type="checkbox" name="actvAllThsClthsServc" id="actvAllThsClthsServc" class="peer sr-only" {{ $limitLoop > 0 && $countActiveServc === $limitLoop ? 'checked' : '' }}>
                    <div class="rndBall h-6 aspect-square rounded-[100%] bg-white border border-black relative -top-[5%] left-0 -translate-x-0 peer-checked:left-[101%] peer-checked:-translate-x-[101%] peer-checked:bg-[#FF3377] peer-checked:border-pink-950"></div>
                </div>
            </div>
        </label>
    </div>
    <div class="saveThsServc mt-2">
        <button type="button" class="btn-sveServcUnits border border-black px-4 py-2 rounded-lg">
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