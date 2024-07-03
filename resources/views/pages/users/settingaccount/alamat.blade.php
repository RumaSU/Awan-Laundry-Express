<div class="set-alamat">
    <div class="header-alamat mt-8">
        <div class="addAddressUser my-2">
            <button class="btnAddUserAddress flex items-center justify-center w-48 bg-[#FF3377] text-white rounded-lg p-1 font-bold h-12 hover:bg-[#D42A63]">Tambahkan Alamat</button>
        </div>
    </div>
    <div class="mainList-address space-y-2">
        @if ($dataAddress->count() > 0)
            @if (isset($dataAddressChecked))
                <div class="itmAddressUser bg-[#E1F3FE] border-2 border-[#0493CC] rounded-2xl w-full p-5" data-addressId="{{ $dataAddressChecked->idAddress }}" data-addressSelected="{{ $dataAddressChecked->selected }}">
                    <div class="fieldAddress flex flex-col justify-between h-full">
                        <div class="nmeLblAddress font-bold">
                            <div class="tx">
                                <p class="dataAddsDetailLabel" data-detailAddress="{{ $dataAddressChecked->labelAddress }}">{{ $dataAddressChecked->labelAddress }}</p>
                            </div>
                        </div>
                        <div class="nmeRecev text-sm font-bold mb-2">
                            <div class="tx">
                                <p class="dataAddsDetailReceiver" data-detailAddress="{{ $dataAddressChecked->receiver }}">{{ $dataAddressChecked->receiver }}</p>
                            </div>
                        </div>
                        <div class="telpRecev my-0.5">
                            <div class="tx">
                                <p class="dataAddsDetailRecvTelp" data-detailAddress="{{ $dataAddressChecked->receiver_telp }}">{{ $dataAddressChecked->receiver_telp }}</p>
                            </div>
                        </div>
                        <div class="detailAddress break-all h-14 overflow-hidden my-0.5">
                            <div class="tx line-clamp-2 flex flex-wrap items-center gap-1">
                                @if (isset($dataAddressChecked->ad_street))
                                    <p class="dataAddsDetailStreet" data-detailAddress="{{ $dataAddressChecked->ad_street }}"> {{ $dataAddressChecked->ad_street }}, </p>
                                @endif
                                @if (isset($dataAddressChecked->ad_vill))
                                    <p class="dataAddsDetailVill" data-detailAddress="{{ $dataAddressChecked->ad_vill }}"> {{ $dataAddressChecked->ad_vill }}, </p>
                                @endif
                                @if (isset($dataAddressChecked->ad_subdistrc))
                                    <p class="dataAddsDetailSubdistrc" data-detailAddress="{{ $dataAddressChecked->ad_subdistrc }}"> {{ $dataAddressChecked->ad_subdistrc }}, </p>
                                @endif
                                @if (isset($dataAddressChecked->ad_distrc))
                                    <p class="dataAddsDetailDistrc" data-detailAddress="{{ $dataAddressChecked->ad_distrc }}"> {{ $dataAddressChecked->ad_distrc }}, </p>
                                @endif
                                @if (isset($dataAddressChecked->ad_city))
                                    <p class="dataAddsDetailCity" data-detailAddress="{{ $dataAddressChecked->ad_city }}"> {{ $dataAddressChecked->ad_city }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="coordinateAddress break-all shrink-0 text-sm my-0.5">
                            <div class="tx">
                                <p class="dataAddsDetailDistrc" data-detailAddress="{{ $dataAddressChecked->ad_coordinates }}">{{ $dataAddressChecked->ad_coordinates }}</p>
                            </div>
                        </div>
                        <td class="EdBtn shrink-0 my-0.5">
                            <div class="text-[#0493CC]">
                                <button type="button" class="btnEditUserAddress">Ubah</button>
                            </div>
                        </td>
                    </div>
                </div>
            @endif
            @foreach ($dataAddress as $address)
                <div class="itmAddressUser bg-[#e6e6e6] border-2 border-[#2e2e2e] rounded-2xl w-full p-5" data-addressId="{{ $address->idAddress }}" data-addressSelected="{{ $address->selected }}">
                    <div class="fieldAddress flex flex-col justify-between h-full">
                        <div class="nmeLblAddress font-bold">
                            <div class="tx">
                                <p class="dataAddsDetailLabel" data-detailAddress="{{ $address->labelAddress }}">{{ $address->labelAddress }}</p>
                            </div>
                        </div>
                        <div class="nmeRecev text-sm font-bold mb-2">
                            <div class="tx">
                                <p class="dataAddsDetailReceiver" data-detailAddress="{{ $address->receiver }}">{{ $address->receiver }}</p>
                            </div>
                        </div>
                        <div class="telpRecev my-0.5">
                            <div class="tx">
                                <p class="dataAddsDetailRecvTelp" data-detailAddress="{{ $address->receiver_telp }}">{{ $address->receiver_telp }}</p>
                            </div>
                        </div>
                        <div class="detailAddress break-all h-14 overflow-hidden my-0.5">
                            <div class="tx line-clamp-2 flex flex-wrap items-center gap-1">
                                @if (isset($address->ad_street))
                                    <p class="dataAddsDetailStreet" data-detailAddress="{{ $address->ad_street }}"> {{ $address->ad_street }}, </p>
                                @endif
                                @if (isset($address->ad_vill))
                                    <p class="dataAddsDetailVill" data-detailAddress="{{ $address->ad_vill }}"> {{ $address->ad_vill }}, </p>
                                @endif
                                @if (isset($address->ad_subdistrc))
                                    <p class="dataAddsDetailSubdistrc" data-detailAddress="{{ $address->ad_subdistrc }}"> {{ $address->ad_subdistrc }}, </p>
                                @endif
                                @if (isset($address->ad_distrc))
                                    <p class="dataAddsDetailDistrc" data-detailAddress="{{ $address->ad_distrc }}"> {{ $address->ad_distrc }}, </p>
                                @endif
                                @if (isset($address->ad_city))
                                    <p class="dataAddsDetailCity" data-detailAddress="{{ $address->ad_city }}"> {{ $address->ad_city }} </p>
                                @endif
                            </div>
                        </div>
                        <div class="coordinateAddress break-all shrink-0 text-sm my-0.5">
                            <div class="tx">
                                <p class="dataAddsDetailCoord" data-detailAddress="{{ $address->ad_coordinates }}">{{ $address->ad_coordinates }}</p>
                            </div>
                        </div>
                        <td class="EdBtn shrink-0 my-0.5">
                            <div class="text-[#0493CC]">
                                <button type="button" class="btnEditUserAddress">Ubah</button>
                            </div>
                        </td>
                    </div>
                </div>
            @endforeach
        @else
            <div class="noAddress w-full bg-[#d1d1d1] border-2 rounded-2xl relative">
                <div class="fieldNoAddress flex flex-col justify-center items-center gap-4 h-52">
                    <span class="icnLoc text-7xl text-[#aaaaaa]">
                        <i class="fas fa-location-dot"></i>
                    </span>
                    <div class="tx text-[#414141]">
                        <p>Belum ada alamat yang ditambahkan.</p>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
<div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 shadow-sm shadow-black p-4 bg-white rounded-xl z-[100] h-[70vh] overflow-y-scroll" data-URLSettingFrom="{{ route('user\settings\address') }}">
    <div class="closePopupContent">
        <span class="closeIcn text-xl">
            <i class="fas fa-x"></i>
        </span>
    </div>
    <div class="cPopupContent flex items-center justify-between">
        <div class="ctr-frmField w-96 shrink-0 p-4">
            <div class="h-popup">
                <h3>Masukkan Alamat Anda</h3>
            </div>
            <div class="ket-popup">
                <p>Pastikan kamu mengisi alamat dengan benar</p>
            </div>
            <form class="formField dataAddressUser" data-formUrl="{{ route('user\settings\address\save') }}">
                <div class="formAddress">
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="labelAddressUser">Label</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="labelAddressUser" name="labelAddressUser" placeholder="Nama Penerima">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsReceiverUser">Penerima</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsReceiverUser" name="addsReceiverUser" placeholder="Nama Penerima">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsReceiverTelpUser">No Telpon</label>
                        <input class="w-full rounded-md h-8 text-xs hide-input-arrow" type="number" id="addsReceiverTelpUser" name="addsReceiverTelpUser" placeholder="Nama Penerima">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsStreetUser">Jalan</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsStreetUser" name="addsStreetUser" placeholder="Nama Penerima">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsVillUser">Kelurahan/Desa</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsVillUser" name="addsVillUser" placeholder="Kelurahan/Desa">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsSubdistrUser">Kecamatan</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsSubdistrUser" name="addsSubdistrUser" placeholder="Kecamatan">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsDistrUser">Kabupaten</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsDistrUser" name="addsDistrUser" placeholder="Kabupaten">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsCityUser">Kota</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsCityUser" name="addsCityUser" placeholder="Kota">
                    </div>
                    <div class="input-popup my-2 flex flex-col">
                        <label class="font-bold" for="addsCoordinatesUser">Lokasi Gmaps</label>
                        <input class="w-full rounded-md h-8 text-xs" type="text" id="addsCoordinatesUser" name="addsCoordinatesUser" placeholder="Lokasi Gmaps" pattern="https?://(www\.)?google\.[a-z]+/maps(/.*)?">
                    </div>
                    <div class="input-popup flex items-center gap-2 mt-6">
                        <input class="w-8 h-8 aspect-square rounded-md" type="checkbox" id="makeAddressUserPrimary" name="makeAddressUserPrimary">
                        <label class="font-bold" for="makeAddressUserPrimary">Jadikan Utama</label>
                    </div>
                    <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                    <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                    <button type="button" class="sbmAddressDataUser my-2 bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button">Simpan</button>
                </div>
            </form>
        </div>
        {{-- <div class="frameMaps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1347.4693789393511!2d107.63420035063838!3d-6.9092069346683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNTQnMzMuOSJTIDEwN8KwMzgnMDUuOCJF!5e0!3m2!1sen!2sid!4v1719913471173!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> --}}
    </div>
</div>