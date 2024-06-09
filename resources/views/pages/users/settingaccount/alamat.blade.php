<div class="set-alamat">
    <div class="header-alamat">
        <div class="add-alamat">
            <button class="button-alamat" onclick="showPopup('alamat')">Tambahkan Alamat</button>
        </div>
        <div class="popup" id="popup-alamat">
            <span class="close" onclick="closePopup('alamat')">&times;</span>
            <div class="h-popup">
                <h3>Masukkan Alamat Anda</h3>
            </div>
            <div class="ket-popup">
                <p>Pastikan kamu mengisi alamat dengan benar</p>
            </div>
            <div class="input-popup">
                <label for="alamat-keterangan">Keterangan Tempat</label>
                <input type="text" id="alamat-keterangan" placeholder="Nama User Baru">
            </div>
            <div class="input-popup">
                <div class="rtrw">
                    <div class="rt">
                        <label for="alamat-rt">RT</label>
                        <input type="text" id="alamat-rt" placeholder="RT">
                    </div>
                    <div class="rw">
                        <label for="alamat-rw">RW</label>
                    <input type="text" id="alamat-rw" placeholder="RW">
                    </div>
                </div>
            </div>
            <div class="input-popup">
                <label for="alamat-kelurahan">Kelurahan/Desa</label>
                <input type="text" id="alamat-kelurahan" placeholder="Kelurahan/Desa">
            </div>
            <div class="input-popup">
                <label for="alamat-kecamatan">Kecamatan</label>
                <input type="text" id="alamat-kecamatan" placeholder="Kecamatan">
            </div>
            <div class="input-popup">
                <label for="alamat-kabupaten">Kabupaten</label>
                <input type="text" id="alamat-kabupaten" placeholder="Kabupaten">
            </div>
            <div class="input-popup">
                <label for="alamat-gmaps">Lokasi Gmaps</label>
                <input type="text" id="alamat-gmaps" placeholder="Lokasi Gmaps" pattern="https?://(www\.)?google\.[a-z]+/maps(/.*)?">
            </div>
            <button onclick="saveChanges('alamat')">Simpan</button>
        </div>
    </div>
    <div class="main-address">
        <div class="field-alamat">
            <div class="nm-user">
                <p>Nama User</p>
            </div>
            <div class="no-hp">
                <p>081234567890</p>
            </div>
            <div class="detail-alamat">
                Kampus 1 Polindra, RT.001 RW.001 Desa Krasak Kecamatan Lohbener Kabupaten Indramayu
            </div>
            <div class="kordinat-maps">
                lokasi gmaps
            </div>
            <button onclick="showPopup('alamat')">Ubah Alamat</button>
        </div>
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