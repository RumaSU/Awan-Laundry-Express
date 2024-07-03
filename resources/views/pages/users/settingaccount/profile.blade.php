<div class="cProfileSetting flex w-full">
    <div class="imgProfil block w-60 p-5 shrink-0">
        <div class="imgUser">
            <div class="cImg w-56 p-1.5 aspect-square bg-gray-200 rounded-lg">
                <img src="{{asset('assets/components/icon/layer.png')}}" alt="" class="object-cover object-center">
            </div>
        </div>
        <div class="chooseImg flex mt-3">
            <button type="button" class="flex justify-center items-center bg-white rounded-lg border border-[rgb(145,145,145)] font-bold h-12 w-full transition-colors hover:bg-[#FF3377] hover:text-white">Pilih Profil</button>
        </div>
        <div class="warningChsImg text-sm text-[rgb(78,78,78)] italic">
            <p>Maksimal file diunggah 10 MB (Megabytes)</p>
            <P>Type File : JPG, PNG, JPEG</P>
        </div>
    </div>
    <div class="ctrSettings block w-full p-5" data-URLSettingFrom="{{ route('user\settings\profile') }}">
        <div class="table-profile p-5 rounded-lg border border-gray-300">
            <div class="judul-bio">
                <p>Ubah Biodata Diri</p>
            </div>
            <table class="profileAccount text-sm w-full overflow-hidden break-all">
                <tr class="profileContent profileName flex items-center justify-between w-full py-2">
                    <td class="lbl w-36 shrink-0">Nama</td>
                    <td class="Val w-full line-clamp-1">{{ Auth::user()->UserDetail->name }}</td>
                    <td class="EdBtn shrink-0">
                        <div class="text-[#02CCFF]">
                            <button type="button" class="btnEditUserData">Ubah</button>
                        </div>
                    </td>
                </tr>
                <tr class="profileContent profileGender flex items-center justify-between w-full py-2">
                    <td class="lbl w-36 shrink-0">Jenis Kelamin</td>
                    <td class="Val w-full line-clamp-1">{{ Auth::user()->UserDetail->gender }}</td>
                    <td class="EdBtn shrink-0">
                        <div class="text-[#02CCFF]">
                            <button type="button" class="btnEditUserData">Ubah</button>
                        </div>
                    </td>
                </tr>
                <tr class="profileContent profileBirth flex items-center justify-between w-full py-2">
                    <td class="lbl w-36 shrink-0">Tanggal Lahir</td>
                    <td class="Val w-full line-clamp-1">{{ (Auth::user()->UserDetail->birth_date) ? Carbon\Carbon::parse(Auth::user()->UserDetail->birth_date)->format('d-m-Y') : 'Haven\'t choosen' }}</td>
                    <td class="EdBtn shrink-0">
                        <div class="text-[#02CCFF]">
                            <button type="button" class="btnEditUserData">Ubah</button>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-5 rounded-md shadow-sm shadow-black w-[25rem] z-50" id="popup-nama">
                <div class="closePopupContent">
                    <span class="closeIcn text-xl">
                        <i class="fas fa-x"></i>
                    </span>
                </div>
                <div class="cPopupContent">
                    <div class="h-popup">
                        <h3>Ubah Nama</h3>
                    </div>
                    <form class="formField changeName" data-formUrl="{{ route('user\settings\profile\name') }}">
                        <div class="ket-popup">
                            <p>Kamu hanya dapat mengubah nama {{ Auth::user()->UserDetail->remain_name_change }} kali lagi. Pastikan nama
                                sudah benar</p>
                        </div>
                        <div class="input-popup">
                            <label for="nama">Nama</label>
                            <input type="text" name="changeNameUser" id="nama" placeholder="Nama User Baru" value="{{ Auth::user()->UserDetail->name }}" class="inpField border rounded-md w-full h-8 text-xs my-4" style="border-color: #ccc;">
                        </div>
                        <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                        <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                        <div class="ket-popup">
                            <p>Nama dapat dilihat oleh pengguna lain</p>
                            @if (Auth::user()->UserDetail->remain_name_change > 0)
                                <button class="sbmChangeDataUser bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button">Simpan</button>
                            @else
                                <p style="color: red;">Kamu sudah tidak bisa melakukan perubahan nama</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
            <div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-5 rounded-md shadow-sm shadow-black w-[25rem] z-50" id="popup-jeniskelamin">
                <div class="closePopupContent">
                    <span class="closeIcn text-xl">
                        <i class="fas fa-x"></i>
                    </span>
                </div>
                <div class="cPopupContent">
                    <div class="h-popup">
                        <h3>Pilih Jenis Kelamin Kamu</h3>
                    </div>
                    <form class="formField changeGender" data-formUrl="{{ route('user\settings\profile\gender') }}">
                        <div class="popup-radio my-8 *:flex *:items-center *:gap-2 *:p-2 *:rounded-lg">
                            <label for="menGender" class="male block has-[:checked]:bg-blue-200">
                                <input type="radio" id="menGender" name="genderUser" value="Male" {{ Auth::user()->UserDetail->gender === 'Male' ? 'checked' : '' }}>
                                <div class="tx">Male</div>
                            </label>
                            <label for="womenGender" class="female block has-[:checked]:bg-blue-200">
                                <input type="radio" id="womenGender" name="genderUser" value="Female" {{ Auth::user()->UserDetail->gender === 'Female' ? 'checked' : '' }}>
                                <div class="tx">Female</div>
                            </label>
                            <label for="notToSay" class="notSay block has-[:checked]:bg-blue-200">
                                <input type="radio" id="notToSay" name="genderUser" value="Prefer not to say" {{ Auth::user()->UserDetail->gender === 'Prefer not to say' ? 'checked' : '' }}>
                                <div class="tx">Prefer Not To Say</div>
                            </label>
                        </div>
                        <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                        <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                        <button class="sbmChangeDataUser bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-5 rounded-md shadow-sm shadow-black w-[25rem] z-50" id="popup-tanggal-lahir">
                <div class="closePopupContent">
                    <span class="closeIcn text-xl">
                        <i class="fas fa-x"></i>
                    </span>
                </div>
                <div class="cPopupContent">
                    <div class="h-popup">
                        <h3>Masukkan Tanggal Lahir Anda</h3>
                    </div>
                    <form class="formField changeBirth" data-formUrl="{{ route('user\settings\profile\birth') }}">
                        <div class="input-popup">
                            <input type="date" name="changeBirthUser" id="tanggal-lahir" class="inpField border rounded-md w-full h-8 text-xs my-4" style="border-color: #ccc;" value="{{ (Auth::user()->UserDetail->birth_date) ? Auth::user()->UserDetail->birth_date : '' }}">
                        </div>
                        <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                        <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                        <button class="sbmChangeDataUser bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="table-contact mt-10 p-5 rounded-lg border border-gray-300">
            <div class="judul-contact text-lg font-bold">
                <p>Ubah Kontak</p>
            </div>
            <table class="profileContact text-sm w-full overflow-hidden break-all">
                <tr class="profileContent profileEmail flex items-center justify-between w-full py-2">
                    <td class="lbl w-36 shrink-0">Email</td>
                    <td class="Val w-full line-clamp-1">{{ Auth::user()->email }}</td>
                    <td class="EdBtn shrink-0">
                        <div class="text-[#02CCFF]">
                            <button type="button" class="btnEditUserData">Ubah</button>
                        </div>
                    </td>
                </tr>
                <tr class="profileContent profileTelp flex items-center justify-between w-full py-2">
                    <td class="lbl w-36 shrink-0">No Handphone</td>
                    <td class="Val w-full line-clamp-1">{{ Auth::user()->UserDetail->telp }}</td>
                    <td class="EdBtn shrink-0">
                        <div class="text-[#02CCFF]">
                            <button type="button" class="btnEditUserData">Ubah</button>
                        </div>
                    </td>
                </tr>
            </table>
            <div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-5 rounded-md shadow-sm shadow-black w-[25rem] z-50" id="popup-email">
                <div class="closePopupContent">
                    <span class="closeIcn text-xl">
                        <i class="fas fa-x"></i>
                    </span>
                </div>
                <div class="cPopupContent">
                    <div class="h-popup">
                        <h3>Ubah Email</h3>
                    </div>
                    <div class="ket-popup">
                        <p>Kamu hanya dapat mengubah email {{ Auth::user()->remain_email_change }} kali lagi. Pastikan email sudah benar</p>
                    </div>
                    <div class="input-popup">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="example123@gmail.com" value="{{ Auth::user()->email }}" class="inpField border rounded-md w-full h-8 text-xs my-4" style="border-color: #ccc;">
                    </div>
                    <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                    <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                    <button class="sbmChangeDataUser bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button" onclick="saveChanges('email')">Simpan</button>
                </div>
            </div>
            <div class="popupContent hidden fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-white p-5 rounded-md shadow-sm shadow-black w-[25rem] z-50" id="popup-nohp">
                <div class="closePopupContent">
                    <span class="closeIcn text-xl">
                        <i class="fas fa-x"></i>
                    </span>
                </div>
                <div class="cPopupContent">
                    <div class="h-popup">
                        <h3>Ubah No Telepon</h3>
                    </div>
                    <form class="formField changeTelpNumber" data-formUrl="{{ route('user\settings\profile\telp') }}">
                        <div class="input-popup">
                            <label for="telNumberUser">No Telepon</label>
                            <input type="number" name="changeTelpNumberUser" id="telNumberUser" class="inpField border rounded-md w-full h-8 text-xs my-4 hide-input-arrow" style="border-color: #ccc;" value="{{ Auth::user()->UserDetail->telp }}">
                        </div>
                        <div class="successMessages text-xs text-green-700 my-3 space-y-2"></div>
                        <div class="errorMessages text-xs text-red-600 my-3 space-y-2"></div>
                        <button class="sbmChangeDataUser bg-[#FF3377] rounded-md text-white font-bold w-full h-8 flex justify-center items-center mb-4" type="button">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>