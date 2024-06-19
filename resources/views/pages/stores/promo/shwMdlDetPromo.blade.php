{{-- <div class="ctr-shwMdlDetOrder w-full p-2 md:w-3/4 max-w-[1280px] h-[100vh] md:h-[80vh] bg-pink-200 transition-all fixed z-[100] left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 border border-black"> --}}
    <div class="ctr-shwMdlDetPromo p-2 h-[100vh] md:h-[80vh] overflow-hidden bg-white md:rounded-2xl md:shadow-lg md:shadow-black/50 fixed z-[100] hidden w-0 md:w-[0]" style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="cShwMdlDetPromo p-1 h-full relative">
            <div class="icnClsMdlDetPromo">
                <div id="icnClsXMdlDetThsPromo" class="icnClsX rounded-lg py-2 px-3 cursor-pointer absolute z-[2] top-0 right-0 bg-white md:border md:border-black">
                    <span class="icn text-xl">
                        <i class="fa-solid fa-x"></i>
                    </span>
                </div>
            </div>
            <div class="headTxMdlDetPromo sticky top-0 bg-white p-2 border-b-2">
                <div class="txHDtPromo font-bold text-xl md:text-2xl">
                    <h2>Detail Promo</h2>
                </div>
            </div>
            <div class="ctr-detThsPromo h-full">
                <div class="cDetThsPromo h-full flex gap-2">
                    {{-- <div class="ctr-mdlDetOrder h-full w-3/5 bg-white p-2 border border-black"> --}}
                    <div class="ctr-mdlDetPromo h-full w-full">
                        <div class="cMdlDetPromo h-full pb-24">
                            <div class="ctr-cMdlDetPromo h-full p-2 relative">
                                <div class="cCMdlDetPromo h-full p-2 pb-4 overflow-y-scroll">
                                    <div class="cLstSecMdlPromoDet px-4">
                                        {{-- Section Promo Kind --}}
                                        <div class="sec-mdlPromoStatus mt-3">
                                            <div class="hMdlPromoStatus flex items-center gap-2">
                                                <div class="txMdlTSts text-lg md:text-xl">
                                                    <strong>Promo</strong>
                                                </div>
                                                <div class="stPromoSts px-4 py-1 text-sm rounded-lg border border-black">
                                                    <div class="txThs">
                                                        <p>@{{Publik}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ctr-kndMdlPromo min-[410px]:pl-4 mt-2">
                                                <div class="cKndMdlPromo min-[410px]:flex items-center gap-1 flex-wrap max-[410px]:space-y-1 text-sm sm:text-[0.925rem] text-center">
                                                    <div class="itmKndPromo">
                                                        <div class="cThsItmKnd px-4 py-1 text-sm rounded-lg border border-black">
                                                            <div class="txThs">
                                                                <p>{ Kiloan }</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itmKndPromo">
                                                        <div class="cThsItmKnd px-4 py-1 text-sm rounded-lg border border-black">
                                                            <div class="txThs">
                                                                <p>{ Satuan }</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="itmKndPromo">
                                                        <div class="cThsItmKnd px-4 py-1 text-sm rounded-lg border border-black">
                                                            <div class="txThs">
                                                                <p>{ Ongkir }</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Section Promo Detail --}}
                                        <div class="sec-mdlPromoDetail mt-3">
                                            <div class="hMdlPromoDetail text-xl">
                                                <div class="txHMdlTDtl shrink-0 text-lg md:text-xl">
                                                    <strong>Detail Promo</strong>
                                                </div>
                                            </div>
                                            <div class="ctr-detLstMdlPromo px-4 sm:px-6 mt-2 rounded-xl text-sm sm:text-[0.925rem]">
                                                <div class="cDetLstMdlPromo list-decimal space-y-2">
                                                    @php
                                                        $randLoop = rand(1, 15);
                                                    @endphp
                                                    @for ($z = 0; $z < $randLoop; $z++)
                                                        @php
                                                            $randDiscount = rand(1, 100);
                                                            $randMinDisc = rand(80, 400) * 100;
                                                        @endphp
                                                        <div class="itmDtlPromo list-item">
                                                            <div class="cTxDtlPromo">
                                                                <p>
                                                                    Dapatkan diskon {{ $randDiscount }}% dengan minimum belanja {{ number_format($randMinDisc) }}
                                                                    untuk penggunaan Layanan <strong class="text-[#ff3377]">Kiloan</strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sec-editThsPromo py-4 px-8 bg-white w-full flex items-center justify-center fixed bottom-0 left-0">
                                <div class="ctr-editThsPromo w-full">
                                    <div class="cEditThsPromo text-center">
                                        <div class="btn-clkEdtThsPromo cursor-pointer text-white px-8 py-2 rounded-lg bg-[#FF3377] transition-all duration-[400ms] hover:opacity-80">
                                            <div class="txL">
                                                <strong>Edit</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-mdlWhsDetPromo hidden border border-black">
                        <div class="cMdlWhsDetPromo border border-black">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>