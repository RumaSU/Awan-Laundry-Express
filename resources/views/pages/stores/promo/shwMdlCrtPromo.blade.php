<div class="ctr-shwMdlCrtPromo p-2 h-[100vh] md:h-[80vh] overflow-hidden bg-white md:rounded-2xl md:shadow-lg md:shadow-black/50 transition-all fixed z-[100] w-0 md:w-[0] hidden backface-hidden" style="left: 50%; top: 50%; transform: translate(-50%, -50%);">
    <div class="cShwMdlCrtPromo p-1 h-full relative">
        <div class="icnClsMdlCrtPromo">
            <div id="icnClsXMdlCrtThsPromo" class="icnClsX rounded-lg py-2 px-3 cursor-pointer absolute z-[2] top-0 right-0 bg-white border border-black">
                <span class="icn text-xl">
                    <i class="fa-solid fa-x"></i>
                </span>
            </div>
        </div>
        <div class="headTxMdlCrtPromo sticky top-0 bg-white p-2 border-b-2">
            <div class="txHDtPromo font-bold text-xl md:text-2xl">
                <h2>Tambah Promo</h2>
            </div>
        </div>
        <div class="ctr-formCrtPromo h-full overflow-hidden">
            <div class="cFormCrtPromo h-full">
                <form action="" class="cFrmCrtThsPrm h-full overflow-hidden">
                    <div class="ctr-crtThsPromo h-full bg-white p-2 pb-28">
                        <div class="cCrtThsPromo h-full p-2 pb-4 overflow-y-scroll">
                            @php
                                // do random what order is kilos or items or both
                                // looping one of them must have true
                                do {
                                    $whatOrder = [
                                        'kilos' => (bool) rand(0, 1),
                                        'items' => (bool) rand(0, 1)
                                    ];
                                } while(($whatOrder['kilos'] == false) && ($whatOrder['items'] == false));
                                
                                // Do random quality doing double order
                                $qualDoubleOrder = mt_rand() / mt_getrandmax();
                                // Checking prob if double order when kilos is true then doing to items if false
                                ((($whatOrder['kilos']) && !($whatOrder['items'])) && ($qualDoubleOrder < 0.3)) ? $whatOrder['items'] = true : $whatOrder['items'];
                                // if ((($whatOrder['kilos']) && !($whatOrder['items'])) && ($qualDoubleOrder < 0.3)) {
                                //     $whatOrder['items'] = true;
                                // }
                                
                                // Do random quality doing double order
                                $qualDoubleOrder = mt_rand() / mt_getrandmax();
                                // Checking prob if double order when items is true then doing to kilos if false
                                ((($whatOrder['items']) && !($whatOrder['kilos'])) && ($qualDoubleOrder < 0.2)) ? $whatOrder['kilos'] = true : $whatOrder['kilos'];
                                // if ((($whatOrder['items']) && !($whatOrder['kilos'])) && ($qualDoubleOrder < 0.2)) {
                                //     $whatOrder['kilos'] = true;
                                // }
                            @endphp
                            <div class="ctr-mdlCrtPromo">
                                <div class="cMdlCrtPromo">
                                    <div class="ctr-frmCrtThsPrm">
                                        <div class="cLstSecMdlCrtePromo px-4">
                                            {{-- Section Name Promo --}}
                                            <div class="sec-mdlCrtePromo mt-3">
                                                <div class="ctr-crteMdlPromo mt-2">
                                                    <div class="cCrteMdlPromo text-sm sm:text-[0.925rem] sm:flex sm:gap-4">
                                                        <div class="ctr-imageCtrMdlPrm shrink-0">
                                                            <div class="cImageCtrMdlPrm h-36 sm:aspect-video relative">
                                                                <label for="imgMdlCrtePrmo" class="rounded-lg overflow-hidden block border border-black h-full cursor-pointer group">
                                                                    <img src="{{asset('assets/img/dumb/imgtemp 1.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                                                                    <div class="emAddImg flex gap-4 flex-col items-center justify-center bg-gray-200 w-full h-full z-0 absolute top-0 left-0 opacity-0 text-gray-600 transition-all group-hover:animate-pulse backface-hidden">
                                                                        <i class="far fa-images text-3xl"></i>
                                                                        <span>Add Image</span>
                                                                    </div>
                                                                </label>
                                                                <input type="file" name="" id="imgMdlCrtePrmo" accept="image/*" class="sr-only">
                                                            </div>
                                                        </div>
                                                        <div class="ctr-nmPromEUntlDt max-sm:mt-4 w-full">
                                                            <div class="cNmPromEUntlDt space-y-2">
                                                                <div class="inpFldNmePromo">
                                                                    <div class="cFlsNmePrm space-y-2">
                                                                        <div class="lblInp">
                                                                            <label for="NameMdlCrtePrmo" class="block font-semibold">
                                                                                <p>Judul</p>
                                                                            </label>
                                                                        </div>
                                                                        <div class="inpFThs">
                                                                            <input type="text" name="" id="NameMdlCrtePrmo" placeholder="Promo" class="w-full">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="inpFldUntlDatePromo">
                                                                    <div class="cFldUntDPrm space-y-2">
                                                                        <div class="lblInp">
                                                                            <label for="DtUntlMdlCrtePrmo" class="block font-semibold">
                                                                                <p>Hingga</p>
                                                                            </label>
                                                                        </div>
                                                                        <div class="inpFThs">
                                                                            <input type="date" name="" id="DtUntlMdlCrtePrmo" class="w-full">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Section List Create Promo --}}
                                            <div class="sec-mdlCrtePromo mt-4">
                                                <div class="ctr-lstCrtPrmBServc">
                                                    <div class="cLstCrtPrmBServc">
                                                        {{-- SSSSSSSSSSSSS --}}
                                                        <div class="ctr-itmCrtPrmBServc mb-2">
                                                            <div class="cItmCrtPrmBServc">
                                                                <details class="group/addPrmKl rounded-xl overflow-hidden border border-transparent open:border-black">
                                                                    <summary class="select-none block p-2 rounded-t-xl group-open/addPrmKl:bg-gray-200">
                                                                        <div class="hdItmLblCrtPrmBServc">
                                                                            <div class="cItmLblCrtPrmBServc flex items-center justify-between cursor-pointer">
                                                                                <div class="chkTxLbl flex items-center gap-4">
                                                                                    <div class="chkSty border border-black w-8 aspect-square rounded-lg overflow-hidden">
                                                                                        <span class="icnChck block text-xl text-center">
                                                                                            <i class="fas fa-check"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="txLbl">
                                                                                        <div class="tx">
                                                                                            <p>Kiloan</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chvSty relative">
                                                                                    <span class="icnChv block text-xl">
                                                                                        <i class="fas fa-chevron-right block group-open/addPrmKl:hidden"></i>
                                                                                        <i class="fas fa-chevron-down hidden group-open/addPrmKl:block"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </summary>
                                                                    <div class="ctr-detCrtPrmBServc mt-4 p-2">
                                                                        <div class="cDetCrtPrmBServc">
                                                                            <div class="ctr-chsByPrcOrDiscnt">
                                                                                <div class="cChsByPrcOrDiscnt">
                                                                                    <details class="group/chsByPrcOrDscnt sm:w-1/2 relative">
                                                                                        <summary class="block px-2 py-1 rounded-lg bg-white border border-black z-[2] relative cursor-pointer">
                                                                                            <div class="hdChsPrcOrDscnt block">
                                                                                                <div class="cChsPrcOrDscnt flex gap-6 items-center justify-between">
                                                                                                    <div class="lblTxChsPrcOrDscnt">
                                                                                                        <div class="lblTx">
                                                                                                            <p>Pilihan</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <span class="icnChv block text-xl">
                                                                                                        <i class="fas fa-chevron-right block group-open/chsByPrcOrDscnt:hidden"></i>
                                                                                                        <i class="fas fa-chevron-down hidden group-open/chsByPrcOrDscnt:block"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </summary>
                                                                                        <div class="ctr-lstCrtPrmByPrDsc mt-2 w-full absolute top-[90%] right-0 p-1.5 rounded-lg bg-white border border-black backface-hidden">
                                                                                            <div class="cLstCrtPrmByPrDsc">
                                                                                                <div class="itmCrtPrmBy">
                                                                                                    <label for="byDiscByPriceKilos" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                        <input type="radio" name="crtPrmKilosByPrcDisc" id="byDiscByPriceKilos" class="checked:border-indigo-500">
                                                                                                        <div class="tx">
                                                                                                            <p>Harga</p>
                                                                                                        </div>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="itmCrtPrmBy">
                                                                                                    <label for="byDiscByPercntKilos" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                        <input type="radio" name="crtPrmKilosByPrcDisc" id="byDiscByPercntKilos" class="checked:border-indigo-500">
                                                                                                        <div class="tx">
                                                                                                            <p>Diskon</p>
                                                                                                        </div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </details>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-vDiscPrcKilosServc text-sm mt-4">
                                                                                <div class="cVDiscPrcKilosServc">
                                                                                    <div class="lblVDiscPrcKilosServc">
                                                                                        <label for="inpVDiscPrcKilosServc">
                                                                                            <div class="txLbl font-semibold">
                                                                                                <p>Potongan Harga</p>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inpFldVDiscPrcKilosServc mt-1">
                                                                                        <label for="inpVDiscPrcKilosServc" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">
                                                                                                <i class="fas fa-percent"></i>
                                                                                                {{-- Rp. --}}
                                                                                            </div>
                                                                                            <input type="number" name="" id="inpVDiscPrcKilosServc" min="0" class="w-full text-sm px-2 py-1 rounded-r-lg border-none focus:ring-0 hide-input-arrow">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-clausDiscPrcKilosServc mt-4">
                                                                                <div class="cClausDiscPrcKilosServc">
                                                                                    <label class="hdLblActvClauseThsServc peer/actvClausKilosServc cursor-pointer" for="actvClausDiscPrcKilosServc">
                                                                                        <div class="cLblActvClauseThsServc flex items-center gap-4">
                                                                                            <input type="checkbox" name="" id="actvClausDiscPrcKilosServc" class="w-7 h-7 focus:ring-0 focus:ring-transparent rounded-lg bg-gray-200">
                                                                                            <div class="txHd">
                                                                                                <div class="tx">
                                                                                                    <p class="font-semibold">Ketentuan</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                    <div class="inpFldVClausDiscPrcKilosServc hidden peer-has-[:checked]/actvClausKilosServc:block mt-1">
                                                                                        <label for="inpVClausDiscPrcKilosServc" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">min</div>
                                                                                            <input type="number" name="" id="inpVClausDiscPrcKilosServc" min="0" class="w-full text-sm px-2 py-1 border-none focus:ring-0 hide-input-arrow">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">kg</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </details>
                                                            </div>
                                                        </div>
                                                        {{-- sssssssssssss --}}
                                                        <div class="ctr-itmCrtPrmBServc mb-2">
                                                            <div class="cItmCrtPrmBServc">
                                                                <details class="group/addPrmKl rounded-xl overflow-hidden border border-transparent open:border-black">
                                                                    <summary class="select-none block p-2 rounded-t-xl group-open/addPrmKl:bg-gray-200">
                                                                        <div class="hdItmLblCrtPrmBServc">
                                                                            <div class="cItmLblCrtPrmBServc flex items-center justify-between cursor-pointer">
                                                                                <div class="chkTxLbl flex items-center gap-4">
                                                                                    <div class="chkSty border border-black w-8 aspect-square rounded-lg overflow-hidden">
                                                                                        <span class="icnChck block text-xl text-center">
                                                                                            <i class="fas fa-check"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="txLbl">
                                                                                        <div class="tx">
                                                                                            <p>Satuan</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chvSty relative">
                                                                                    <span class="icnChv block text-xl">
                                                                                        <i class="fas fa-chevron-right block group-open/addPrmKl:hidden"></i>
                                                                                        <i class="fas fa-chevron-down hidden group-open/addPrmKl:block"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </summary>
                                                                    <div class="ctr-lstClthsCrtPromo p-2">
                                                                        <div class="cLstClthsCrtPromo">
                                                                            <div class="ctr-searchClthsCrtPromo">
                                                                                <div class="cSearchClthsCrtPromo">
                                                                                    <div class="fldSearchClthsCrtPromo mt-1">
                                                                                        <label for="inpSearchClthsCrtPromo" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">
                                                                                                <i class="fas fa-magnifying-glass"></i>
                                                                                            </div>
                                                                                            <input type="text" name="" id="inpSearchClthsCrtPromo" min="0" class="w-full text-sm px-2 py-1 border-none focus:ring-0 hide-input-arrow">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-lstSlctClthsFrPromo mt-1.5 overflow-y-scroll h-80">
                                                                                <div class="cLstSlctClthsFrPromo space-y-1 block py-2">
                                                                                    @php
                                                                                        $dummyDataClothes = [
                                                                                            // Pakaian Atas
                                                                                            'T-Shirt', 'Polo Shirt', 'Tank Top', 'Blouse', 'Crop Top', 'Long Sleeve Shirt', 'Short Sleeve Shirt', 'Button-up Shirt', 'Henley Shirt', 'Peplum Top', 'Tube Top', 'Camisole', 'Halter Top', 'Tunic',
                                                                                            // Pakaian Bawah
                                                                                            'Jeans', 'Chinos', 'Shorts', 'Skirt', 'Leggings', 'Jeggings', 'Cargo Pants', 'Sweatpants', 'Culottes', 'Palazzo Pants', 'Bermuda Shorts', 'Capris',
                                                                                            // Pakaian Luar
                                                                                            'Jacket', 'Blazer', 'Coat', 'Overcoat', 'Trench Coat', 'Windbreaker', 'Parka', 'Cardigan', 'Poncho', 'Hoodie', 'Kimono',
                                                                                            // Pakaian Formal
                                                                                            'Dress Shirt', 'Suit Jacket', 'Tuxedo', 'Waistcoat', 'Dress Pants', 'Dress Skirt', 'Evening Gown', 'Cocktail Dress', 'Tailcoat',
                                                                                            // Pakaian Kasual
                                                                                            'Casual Shirt', 'Casual Pants', 'Knit Sweater', 'Sweatshirt', 'Jumper', 'Lounge Pants', 'Casual Dress',
                                                                                            // Pakaian Olahraga
                                                                                            'Sports Bra', 'Yoga Pants', 'Running Shorts', 'Athletic Jacket', 'Compression Shirt', 'Board Shorts', 'Tracksuit', 'Activewear Set', 'Leggings',
                                                                                            // Pakaian Musim Dingin
                                                                                            'Wool Sweater', 'Thermal Top', 'Thermal Pants', 'Down Jacket', 'Winter Coat', 'Fleece Jacket', 'Beanie', 'Scarf', 'Gloves', 'Thermal Socks',
                                                                                            // Pakaian Musim Panas
                                                                                            'Sun Dress', 'Beach Shorts', 'Swimwear', 'Hawaiian Shirt', 'Tankini', 'Sarong',
                                                                                            // Pakaian Tradisional
                                                                                            'Kimono', 'Sari', 'Hanbok', 'Kilt', 'Cheongsam', 'Dirndl', 'Kebaya', 'Dashiki', 'Sarong',
                                                                                            // Pakaian Khusus
                                                                                            'Jumpsuit', 'Romper', 'Overalls', 'Bodysuit', 'Coveralls', 'Boiler Suit', 'Dungarees', 'One-piece Swimsuit',
                                                                                            // Pakaian Tidur
                                                                                            'Pajamas', 'Nightgown', 'Sleep Shirt', 'Sleep Pants', 'Nightshirt', 'Sleepsuit', 'Robe', 'Loungewear',
                                                                                            // Pakaian Dalam
                                                                                            'Underwear', 'Boxers', 'Briefs', 'Bikini Briefs', 'Boyshorts', 'Thong', 'Bra', 'Sports Bra', 'Camisole', 'Slip',
                                                                                            // Aksesoris Pakaian
                                                                                            'Belt', 'Scarf', 'Hat', 'Beanie', 'Gloves', 'Necktie', 'Bow Tie', 'Pocket Square', 'Sunglasses', 'Handkerchief',
                                                                                            // Pakaian Resmi
                                                                                            'Formal Gown', 'Business Suit', 'Dress Suit', 'Tuxedo', 'Business Shirt', 'Dress Shoes', 'Business Skirt',
                                                                                            // Pakaian Kerja
                                                                                            'Work Overalls', 'Safety Vest', 'Uniform', 'Lab Coat', 'Chef Jacket', 'Scrubs', 'Work Boots', 'Cargo Pants',
                                                                                            // Pakaian Renang
                                                                                            'Swimsuit', 'Bikini', 'Swim Trunks', 'Board Shorts', 'Rash Guard', 'Swim Cap',
                                                                                            // Pakaian untuk Acara Khusus
                                                                                            'Prom Dress', 'Wedding Dress', 'Bridesmaid Dress', 'Groomsmen Suit', 'Graduation Gown', 'Costume', 'Party Dress', 'Cocktail Dress',
                                                                                            // Pakaian Maternity
                                                                                            'Maternity Dress', 'Maternity Jeans', 'Maternity Top', 'Nursing Bra', 'Maternity Leggings', 'Maternity Skirt',
                                                                                            // Pakaian Musim Gugur
                                                                                            'Flannel Shirt', 'Cardigan', 'Light Jacket', 'Sweater', 'Scarves', 'Booties', 'Layered Outfits',
                                                                                            // Pakaian Musim Semi
                                                                                            'Lightweight Jacket', 'Floral Dress', 'Capri Pants', 'Light Sweater', 'Raincoat', 'Spring Skirt'
                                                                                        ];
                                                                                        $randThs = rand(1, sizeof($dummyDataClothes));
                                                                                    @endphp
                                                                                    @for ($i = 0; $i < $randThs; $i++)
                                                                                        @php
                                                                                            $tmp_uuid = Str::uuid();
                                                                                            $expld_tmp_uuid = explode('-', $tmp_uuid);
                                                                                            $uuidCrtPrmThs = end($expld_tmp_uuid);
                                                                                            
                                                                                            $randIdxClothes = rand(0, (sizeof($dummyDataClothes) - 1));
                                                                                            $choosedClothesName = $dummyDataClothes[$randIdxClothes];
                                                                                            unset($dummyDataClothes[$randIdxClothes]);
                                                                                            $dummyDataClothes = array_values($dummyDataClothes);
                                                                                        @endphp
                                                                                        <div class="itmClthsFrPromo">
                                                                                            <details class="group/addPrmUnt-{{ $uuidCrtPrmThs }} rounded-xl overflow-hidden border border-transparent open:border-black">
                                                                                                <summary class="select-none block p-2 rounded-t-xl group-open/addPrmUnt-{{ $uuidCrtPrmThs }}:bg-gray-200">
                                                                                                    <div class="hdItmLblCrtPrmBServc">
                                                                                                        <div class="cItmLblCrtPrmBServc flex items-center justify-between cursor-pointer">
                                                                                                            <div class="chkTxLbl flex items-center gap-4">
                                                                                                                <div class="chkSty border border-black w-8 aspect-square rounded-lg overflow-hidden">
                                                                                                                    <span class="icnChck block text-xl text-center">
                                                                                                                        <i class="fas fa-check"></i>
                                                                                                                    </span>
                                                                                                                </div>
                                                                                                                <div class="txLbl">
                                                                                                                    <div class="tx">
                                                                                                                        <p>{{ $choosedClothesName }}</p>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="chvSty relative">
                                                                                                                <span class="icnChv block text-xl ">
                                                                                                                    <i class="fas fa-chevron-right block group-open/addPrmUnt-{{ $uuidCrtPrmThs }}:hidden"></i>
                                                                                                                    <i class="fas fa-chevron-down hidden group-open/addPrmUnt-{{ $uuidCrtPrmThs }}:block"></i>
                                                                                                                </span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </summary>
                                                                                                <div class="ctr-detCrtPrmBServc mt-4 p-2">
                                                                                                    <div class="cDetCrtPrmBServc">
                                                                                                        <div class="ctr-chsByPrcOrDiscnt">
                                                                                                            <div class="cChsByPrcOrDiscnt">
                                                                                                                <details class="group/chsByPrcOrDscnt-{{ $uuidCrtPrmThs }} sm:w-1/2 relative">
                                                                                                                    <summary class="block px-2 py-1 rounded-lg bg-white border border-black z-[2] relative cursor-pointer">
                                                                                                                        <div class="hdChsPrcOrDscnt block">
                                                                                                                            <div class="cChsPrcOrDscnt flex gap-6 items-center justify-between">
                                                                                                                                <div class="lblTxChsPrcOrDscnt">
                                                                                                                                    <div class="lblTx">
                                                                                                                                        <p>Pilihan</p>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <span class="icnChv block text-xl">
                                                                                                                                    <i class="fas fa-chevron-right block group-open/chsByPrcOrDscnt-{{ $uuidCrtPrmThs }}:hidden"></i>
                                                                                                                                    <i class="fas fa-chevron-down hidden group-open/chsByPrcOrDscnt-{{ $uuidCrtPrmThs }}:block"></i>
                                                                                                                                </span>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </summary>
                                                                                                                    <div class="ctr-lstCrtPrmByPrDsc mt-2 w-full absolute top-[90%] right-0 p-1.5 rounded-lg bg-white shadow-sm shadow-black/40">
                                                                                                                        <div class="cLstCrtPrmByPrDsc">
                                                                                                                            <div class="itmCrtPrmBy">
                                                                                                                                <label for="byDiscByPriceClths-{{ $uuidCrtPrmThs }}" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                                                    <input type="radio" name="crtPrmItmClthsByPrcDisc-{{ $uuidCrtPrmThs }}" id="byDiscByPriceClths-{{ $uuidCrtPrmThs }}" class="checked:border-indigo-500">
                                                                                                                                    <div class="tx">
                                                                                                                                        <p>Harga</p>
                                                                                                                                    </div>
                                                                                                                                </label>
                                                                                                                            </div>
                                                                                                                            <div class="itmCrtPrmBy">
                                                                                                                                <label for="byDiscClthsByPercnt-{{ $uuidCrtPrmThs }}" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                                                    <input type="radio" name="crtPrmItmClthsByPrcDisc-{{ $uuidCrtPrmThs }}" id="byDiscClthsByPercnt-{{ $uuidCrtPrmThs }}" class="checked:border-indigo-500">
                                                                                                                                    <div class="tx">
                                                                                                                                        <p>Diskon</p>
                                                                                                                                    </div>
                                                                                                                                </label>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </details>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ctr-vDiscPrcItmClthsServc text-sm mt-4">
                                                                                                            <div class="cVDiscPrcItmClthsServc">
                                                                                                                <div class="lblVDiscPrcItmClthsServc">
                                                                                                                    <label for="inpVDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}">
                                                                                                                        <div class="txLbl font-semibold">
                                                                                                                            <p>Potongan Harga</p>
                                                                                                                        </div>
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                                <div class="inpFldVDiscPrcItmClthsServc mt-1">
                                                                                                                    <label for="inpVDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                                                        <div class="w-8 text-center text-sm group-focus-within:text-blue-950">
                                                                                                                            <i class="fas fa-percent"></i>
                                                                                                                            <!-- Rp. -->
                                                                                                                        </div>
                                                                                                                        <input type="number" name="" id="inpVDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}" min="0" class="w-full text-sm px-2 py-1 rounded-r-lg border-none focus:ring-0 hide-input-arrow">
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="ctr-clausDiscPrcItmClthsServc mt-4">
                                                                                                            <div class="cClausDiscPrcItmClthsServc">
                                                                                                                <label class="hdLblActvClauseThsServc peer/actvClausItmClthsServc-{{ $uuidCrtPrmThs }} cursor-pointer" for="actvClausDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}">
                                                                                                                    <div class="cLblActvClauseThsServc flex items-center gap-4">
                                                                                                                        <input type="checkbox" name="" id="actvClausDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}" class="w-7 h-7 focus:ring-0 focus:ring-transparent rounded-lg bg-gray-200">
                                                                                                                        <div class="txHd">
                                                                                                                            <div class="tx">
                                                                                                                                <p class="font-semibold">Ketentuan</p>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </label>
                                                                                                                <div class="inpFldVClausDiscPrcItmClthsServc hidden peer-has-[:checked]/actvClausItmClthsServc-{{ $uuidCrtPrmThs }}:block mt-1">
                                                                                                                    <label for="inpVClausDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                                                        <div class="w-8 text-center text-sm group-focus-within:text-blue-950">min</div>
                                                                                                                        <input type="number" name="" id="inpVClausDiscPrcItmClthsServc-{{ $uuidCrtPrmThs }}" min="0" class="w-full text-sm px-2 py-1 border-none focus:ring-0 hide-input-arrow">
                                                                                                                    </label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </details>
                                                                                        </div>
                                                                                    @endfor
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </details>
                                                            </div>
                                                        </div>
                                                        {{-- SSSSSSSSSSSSS --}}
                                                        <div class="ctr-itmCrtPrmBServc mb-2">
                                                            <div class="cItmCrtPrmBServc">
                                                                <details class="group/addPrmShpng rounded-xl overflow-hidden border border-transparent open:border-black">
                                                                    <summary class="select-none block p-2 rounded-t-xl group-open/addPrmShpng:bg-gray-200">
                                                                        <div class="hdItmLblCrtPrmBServc">
                                                                            <div class="cItmLblCrtPrmBServc flex items-center justify-between cursor-pointer">
                                                                                <div class="chkTxLbl flex items-center gap-4">
                                                                                    <div class="chkSty border border-black w-8 aspect-square rounded-lg overflow-hidden">
                                                                                        <span class="icnChck block text-xl text-center">
                                                                                            <i class="fas fa-check"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="txLbl">
                                                                                        <div class="tx">
                                                                                            <p>Ongkir</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chvSty relative">
                                                                                    <span class="icnChv block text-xl">
                                                                                        <i class="fas fa-chevron-right block group-open/addPrmShpng:hidden"></i>
                                                                                        <i class="fas fa-chevron-down hidden group-open/addPrmShpng:block"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </summary>
                                                                    <div class="ctr-detCrtPrmBServc mt-4 p-2">
                                                                        <div class="cDetCrtPrmBServc">
                                                                            <div class="ctr-chsByPrcOrDiscnt">
                                                                                <div class="cChsByPrcOrDiscnt">
                                                                                    <details class="group/chsByPrcOrDscnt sm:w-1/2 relative">
                                                                                        <summary class="block px-2 py-1 rounded-lg bg-white border border-black z-[2] relative cursor-pointer">
                                                                                            <div class="hdChsPrcOrDscnt block">
                                                                                                <div class="cChsPrcOrDscnt flex gap-6 items-center justify-between">
                                                                                                    <div class="lblTxChsPrcOrDscnt">
                                                                                                        <div class="lblTx">
                                                                                                            <p>Pilihan</p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <span class="icnChv block text-xl">
                                                                                                        <i class="fas fa-chevron-right block group-open/chsByPrcOrDscnt:hidden"></i>
                                                                                                        <i class="fas fa-chevron-down hidden group-open/chsByPrcOrDscnt:block"></i>
                                                                                                    </span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </summary>
                                                                                        <div class="ctr-lstCrtPrmByPrDsc mt-2 w-full absolute top-[90%] right-0 p-1.5 rounded-lg bg-white border border-black backface-hidden">
                                                                                            <div class="cLstCrtPrmByPrDsc">
                                                                                                <div class="itmCrtPrmBy">
                                                                                                    <label for="byDiscByPriceShppng" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                        <input type="radio" name="crtPrmShppngByPrcDisc" id="byDiscByPriceShppng" class="checked:border-indigo-500">
                                                                                                        <div class="tx">
                                                                                                            <p>Harga</p>
                                                                                                        </div>
                                                                                                    </label>
                                                                                                </div>
                                                                                                <div class="itmCrtPrmBy">
                                                                                                    <label for="byDiscByPercntShppng" class="flex items-center gap-4 py-1 px-1 w-full rounded-lg bg-white border border-black has-[:checked]:bg-indigo-50 has-[:checked]:border-indigo-900 has-[:checked]:text-indigo-800 cursor-pointer">
                                                                                                        <input type="radio" name="crtPrmShppngByPrcDisc" id="byDiscByPercntShppng" class="checked:border-indigo-500">
                                                                                                        <div class="tx">
                                                                                                            <p>Diskon</p>
                                                                                                        </div>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </details>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-vDiscPrcShppngServc text-sm mt-4">
                                                                                <div class="cVDiscPrcShppngServc">
                                                                                    <div class="lblVDiscPrcShppngServc">
                                                                                        <label for="inpVDiscPrcShppngServc">
                                                                                            <div class="txLbl font-semibold">
                                                                                                <p>Potongan Harga</p>
                                                                                            </div>
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="inpFldVDiscPrcShppngServc mt-1">
                                                                                        <label for="inpVDiscPrcShppngServc" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">
                                                                                                <i class="fas fa-percent"></i>
                                                                                                {{-- Rp. --}}
                                                                                            </div>
                                                                                            <input type="number" name="" id="inpVDiscPrcShppngServc" min="0" class="w-full text-sm px-2 py-1 rounded-r-lg border-none focus:ring-0 hide-input-arrow">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-clausDiscPrcShppngServc mt-4">
                                                                                <div class="cClausDiscPrcShppngServc">
                                                                                    <label class="hdLblActvClauseThsServc peer/actvClausShppngServc cursor-pointer" for="actvClausDiscPrcShppngServc">
                                                                                        <div class="cLblActvClauseThsServc flex items-center gap-4">
                                                                                            <input type="checkbox" name="" id="actvClausDiscPrcShppngServc" class="w-7 h-7 focus:ring-0 focus:ring-transparent rounded-lg bg-gray-200">
                                                                                            <div class="txHd">
                                                                                                <div class="tx">
                                                                                                    <p class="font-semibold">Ketentuan</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                    <div class="inpFldVClausDiscPrcShppngServc hidden peer-has-[:checked]/actvClausShppngServc:block mt-1">
                                                                                        <label for="inpVClausDiscPrcShppngServc" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">min</div>
                                                                                            <input type="number" name="" id="inpVClausDiscPrcShppngServc" min="0" class="w-full text-sm px-2 py-1 border-none focus:ring-0 hide-input-arrow">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">kg</div>
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </details>
                                                            </div>
                                                        </div>
                                                        {{-- SSSSSSSSSSSSS --}}
                                                        <div class="ctr-itmCrtPrmBServc mb-2">
                                                            <div class="cItmCrtPrmBServc">
                                                                <details class="group/addPrmSpcal rounded-xl overflow-hidden border border-transparent open:border-black">
                                                                    <summary class="select-none block p-2 rounded-t-xl group-open/addPrmSpcal:bg-gray-200">
                                                                        <div class="hdItmLblCrtPrmBServc">
                                                                            <div class="cItmLblCrtPrmBServc flex items-center justify-between cursor-pointer">
                                                                                <div class="chkTxLbl flex items-center gap-4">
                                                                                    <div class="chkSty border border-black w-8 aspect-square rounded-lg overflow-hidden">
                                                                                        <span class="icnChck block text-xl text-center">
                                                                                            <i class="fas fa-check"></i>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="txLbl">
                                                                                        <div class="tx">
                                                                                            <p>Promo Khusus ?</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chvSty relative">
                                                                                    <span class="icnChv block text-xl">
                                                                                        <i class="fas fa-chevron-right block group-open/addPrmSpcal:hidden"></i>
                                                                                        <i class="fas fa-chevron-down hidden group-open/addPrmSpcal:block"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </summary>
                                                                    <div class="ctr-detCrtPrmBServc mt-4 p-2">
                                                                        <div class="cDetCrtPrmBServc">
                                                                            <div class="ctr-searchUsrSpclCrtPromo">
                                                                                <div class="cSearchUsrSpclCrtPromo">
                                                                                    <div class="fldSearchUsrSpclCrtPromo mt-1 relative">
                                                                                        <label for="inpSearchUsrSpclCrtPromo" class="flex items-center p-1 rounded-lg border border-black group focus-within:border-blue-700">
                                                                                            <div class="w-8 text-center text-sm group-focus-within:text-blue-950">
                                                                                                <i class="fas fa-magnifying-glass"></i>
                                                                                            </div>
                                                                                            <input type="text" name="" id="inpSearchUsrSpclCrtPromo" placeholder="Cari...." class="w-full text-sm px-2 py-1 border-none focus:ring-0 hide-input-arrow">
                                                                                        </label>
                                                                                        <div class="cntTotlChsdUsrSpcl bg-white px-1 rounded-md border border-black absolute -right-[0.5%] -top-1/2 translate-x-[0.5%] translate-y-1/2">
                                                                                            <div class="tx text-xs text-center font-semibold text-[#FF3377]">
                                                                                                <p>0</p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ctr-lstChsdUsrCrtSpclPromo mt-2 overflow-y-scroll h-80">
                                                                                <div class="cLstChsdUsrCrtSpclPromo space-y-1">
                                                                                    @php
                                                                                        $dummyDataName = [
                                                                                                            'Judy Medhurst','Henriette Murazik','Claire Nolan',
                                                                                                            'Miss Alberto Kessler','Polly Price','Ruby Lang',
                                                                                                            'Jordyn Lehner DDS','Berta Reichel','Una Schuster',
                                                                                                            'Kari Pouros PhD','Gunner Vandervort','Thomas Bernhard',
                                                                                                            'Amya Gerhold','Ignacio Bergnaum','Dangelo Guªann',
                                                                                                            'Mabelle Halvorson','Dr. Xzavier Corkery','Jarod McKenzie',
                                                                                                            'Keshaun Tillman','Adan Stamm'
                                                                                                        ];
                                                                                        $randUsrSpcl = (int)rand(1, sizeof($dummyDataName));
                                                                                    @endphp
                                                                                    {{-- {{ $randUsrSpcl }} <br> --}}
                                                                                    @for ($i = 0; $i < $randUsrSpcl; $i++)
                                                                                        @php
                                                                                            $tmp_uuid = Str::uuid();
                                                                                            $expl_uuid = explode('-', $tmp_uuid);
                                                                                            $randUuidUsr = end($expl_uuid);
                                                                                            $randRandomName = (int)rand(0, (sizeof($dummyDataName) - 1));
                                                                                            $choosedRandomName = $dummyDataName[$randRandomName];
                                                                                            unset($dummyDataName[$randRandomName]);
                                                                                            $dummyDataName = array_values($dummyDataName);
                                                                                        @endphp
                                                                                        <div class="itmUsrCrtSpclPromo">
                                                                                            <label for="usrSpcl-{{ $randUuidUsr }}" class="block p-2 rounded-lg shadow-sm has-[:checked]:bg-green-200 has-[:checked]:shadow-black/25">
                                                                                                <div class="cItmUsrCrtSpclPromo flex items-center justify-between">
                                                                                                    <div class="imgNmeUsr flex items-center gap-4">
                                                                                                        <div class="imgUsr w-12 aspect-square relative shrink-0">
                                                                                                            <img src="{{ asset('assets/img/dumb/imgtemp 2.jpg') }}" alt="" class="w-full h-full object-cover object-center rounded-[100%]">
                                                                                                        </div>
                                                                                                        <div class="nmeUsr">
                                                                                                            <div class="txNme break-all whitespace-normal line-clamp-1">
                                                                                                                <p>{{ $choosedRandomName }}</p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="totlOrdrServc w-20 shrink-0">
                                                                                                        <div class="txTlOrdr">
                                                                                                            <p>
                                                                                                                <font color="#FF3377">125</font>
                                                                                                                Order
                                                                                                            </p>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <input type="checkbox" name="chsdUsrFrCrtPromoSpcl" id="usrSpcl-{{ $randUuidUsr }}" class="inpChckUsrFrCrtPromoSpcl hidden">
                                                                                            </label>
                                                                                        </div>
                                                                                    @endfor
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </details>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ctr-svCnThsPRomo w-full px-8 absolute bottom-0 min-[490px]:bottom-4 bg-white">
                        <div class="cSvCnThsPRomo flex flex-col min-[490px]:items-end min-[490px]:flex-row-reverse gap-2">
                            <div class="ctr-saveThsPromo">
                                <div class="cSaveThsPromo">
                                    <button type="submit" id="btnSaveThsPromo" class="btnSaveThsPromo max-[490px]:w-full px-8 py-1.5 rounded-lg border border-black">
                                        <div class="txSv">
                                            <p>Simpan</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            <div class="ctr-cnclSvThsPromo">
                                <div class="cCnclSvThsPromo">
                                    <button type="button" id="btnCnclSvThsPromo" class="btnCnclSvThsPromo max-[490px]:w-full px-8 py-1.5 rounded-lg border border-black">
                                        <div class="txCnSv">
                                            <p>Cance</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>