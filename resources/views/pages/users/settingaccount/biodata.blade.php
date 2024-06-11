
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
                        <button onclick="showPopup('nama')">Ubah</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="kolom1">Jenis Kelamin</td>
                <td>Laki-Laki</td>
                <td>
                    <div class="edit">
                        <button onclick="showPopup('jeniskelamin')">Ubah</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="kolom1">Tanggal Lahir</td>
                <td>19 Desember 2024</td>
                <td>
                    <div class="edit">
                        <button onclick="showPopup('tanggal-lahir')">Ubah</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="popup" id="popup-nama">
            <span class="close" onclick="closePopup('nama')">&times;</span>
            <div class="h-popup">
                <h3>Ubah Nama</h3>
            </div>
            <div class="ket-popup">
                <p>Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama
                    sudah benar</p>
            </div>
            <div class="input-popup">
                <label for="nama">Nama</label>
                <input type="text" id="nama" placeholder="Nama User Baru">
            </div>
            <div class="ket-popup">
                <p>Nama dapat dilihat oleh pengguna lain</p>
            </div>
            <button onclick="saveChanges('nama')">Simpan</button>
        </div>
        <div class="popup" id="popup-jeniskelamin">
            <span class="close" onclick="closePopup('jeniskelamin')">&times;</span>
            <div class="h-popup">
                <h3>Pilih Jenis Kelamin Kamu</h3>
            </div>
            <div class="ket-popup">
                <p>Kamu hanya dapat menambahkan data jenis kelamin 1 kali lagi. 
                    Pastikan jenis kelamin sudah benar</p>
            </div>
            <div class="popup-radio">
                <div class="male">
                    <input type="radio" id="laki-laki" name="jeniskelamin" value="Laki-Laki">
                    <label for="laki-laki">Laki-Laki</label>
                </div>
                <div class="female">
                    <input type="radio" id="perempuan" name="jeniskelamin" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>
                
            <button onclick="saveChanges('jeniskelamin')">Simpan</button>
        </div>
        <div class="popup" id="popup-tanggal-lahir">
            <span class="close" onclick="closePopup('tanggal-lahir')">&times;</span>
            <div class="h-popup">
                <h3>Masukkan Tanggal Lahir Anda</h3>
            </div>
            <div class="ket-popup">
                <p>Kamu hanya dapat mengubah tanggal lahir 1 kali lagi. 
                    Pastikan tanggal lahir sudah benar</p>
            </div>
            <div class="input-popupdate">
                <input type="date" id="tanggal-lahir">
            </div>
            <button onclick="saveChanges('tanggal-lahir')">Simpan</button>
        </div>
    </div>
    <div class="table-kontak">
        <div class="judul-kontak">
            <p>Ubah Kontak</p>
        </div>
        <table class="kontak" border="1">
            <tr>
                <td class="kolom1">Email</td>
                <td class="kolom2">emailuser123@gmail.com</td>
                <td>
                    <div class="edit">
                        <button onclick="showPopup('email')">Ubah</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="kolom1">No Handphone</td>
                <td>081234567890</td>
                <td>
                    <div class="edit">
                        <button onclick="showPopup('nohp')">Ubah</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="popup" id="popup-email">
            <span class="close" onclick="closePopup('email')">&times;</span>
            <div class="h-popup">
                <h3>Ubah Email</h3>
            </div>
            <div class="ket-popup">
                <p>Kamu hanya dapat mengubah email 1 kali lagi. Pastikan email sudah benar</p>
            </div>
            <div class="input-popup-kontak">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="example123@gmail.com">
            </div>
            <button onclick="saveChanges('email')">Simpan</button>
        </div>
        <div class="popup" id="popup-nohp">
            <span class="close" onclick="closePopup('nohp')">&times;</span>
            <div class="h-popup">
                <h3>Ubah No Telepon</h3>
            </div>
            <div class="ket-popup">
                <p>Kamu hanya dapat mengubah Nomor Telepon 1 kali lagi. Pastikan Nomor Telepon sudah benar</p>
            </div>
            <div class="input-popup-kontak">
                <label for="nohp">No Telepon</label>
                <input type="text" id="nohp" placeholder="No Telepon">
            </div>
            <button onclick="saveChanges('nohp')">Simpan</button>
        </div>
    </div>
    <script>
        function showPopup(type) {
            const activePopups = document.querySelectorAll('.popup.active');
            activePopups.forEach(popup => {
                popup.classList.remove('active');
            });
            const popup = document.getElementById('popup-' + type);
            popup.classList.add('active');
        }
        function closePopup(type) {
            const popup = document.getElementById('popup-' + type);
            popup.classList.remove('active');
        }
        function saveChanges(type) {
            const input = document.getElementById(type + '-input');
            if (input) {
                const value = input.value;
                alert(type + ' has been changed to ' + value);
                closePopup(type);
            } else {
                alert('Please select an option');
            }
        }
        function closePopupOnClickOutside(event) {
            const activePopups = document.querySelectorAll('.popup.active');
            activePopups.forEach(popup => {
                if (!popup.contains(event.target) && !event.target.closest('button')) {
                    popup.classList.remove('active');
                }
            });
        }
        document.addEventListener('click', function(event) {
            closePopupOnClickOutside(event);
        });
    </script>
</div>
