@extends('layouts.store.index')
@section('titlePage', 'Pengaturan Toko')

@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/stores/pengaturan.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/stores/ubah_nama_toko.css') }}">
@endsection

@section('head-style-field')

@endsection

@section('main-content-store')
    <div class="ctr-transaction mt-8">
        <div class="cTransaction">
            <div class="headTransaction ml-[10%]">
                <div class="card-header">
                    Pengaturan Toko
                </div>
                <div class="judul-text">
                    Lihat dan update profil toko Anda
                </div>
                <br>
                <div class="card">
                    <div class="card-logo-awal">
                        <div class="card-logo">
                            <div class="card-body">
                                <div class="logo-container">
                                    <img class="logo" src="{{asset('assets/components/logoApp/Logo Awan Laundry.png')}}" alt="Logo Toko">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="button-container">
                            {{-- <button type="button" onclick="openFileInput()">Pilih Logo Toko</button> --}}
                            <button class="button">Pilih Logo Toko</button>
                        </div>
                        <div class="deskripsi-logo">
                            <div class="logo-text">
                                Besar file: maksimum 10.000.000 <br> bytes (10 MB).
                            </div>
                            <div class="logo-text">
                                Ekstensi file yang diperbolehkan: <br> .JPG, .JPEG, .PNG
                            </div>
                        </div>
                    </div>

                    <div class="card-profil">
                        <div class="card-header">
                            Ubah Profil Toko
                        </div>
                        <div class="card-body">
                            <div class="keterangan-judul">
                                <div class="mb-3">
                                    <td for="formGroupExampleInput" class="form-label">Nama Toko</td>
                                    <a href="#" class="map-link" id="ubahNamaTokoBtn">Ubah</a>
                                </div>
                            </div>
                            <div class="keterangan-judul">
                                <div class="mb-3">
                                    <td for="formGroupExampleInput" class="form-label">Email</td>
                                    <a href="#" class="map-link" id="ubahEmailTokoBtn">Ubah</a>
                                </div>
                            </div>
                            <div class="keterangan-judul">
                                <div class="mb-3">
                                    <td for="formGroupExampleInput" class="form-label">No. Hp</td>
                                    <a href="#" class="map-link" id="ubahNoHpTokoBtn">Ubah</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-header">
                            Ubah Alamat
                        </div>
                        <div class="address-text">
                            Keterangan Jl. nama jalan, RT.0/RW.0, Nama blok, Nama Desa, Nama Kecamatan, Nama Kabupaten
                        </div>
                        <div class="address-map">
                            <img src="{{ asset('assets/components/icon/location.png') }}" alt="">Terkoneksi dengan gmap
                            {{-- <a class="map-link" href="">Terkoneksi dengan gmap</a> --}}
                        </div>
                        <div class="address-ubah">
                            <a href="#" class="map-link" id="ubahAlamatTokoBtn">Ubah Alamat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="namaTokoModal" class="EditToko" style="display: none;">
        <div class="toko-content">
            <span class="close">&times;</span>
            <div class="ctr-toko">
                <h2><b>Ubah Nama Toko</b></h2>
                <p>Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nama sudah benar</p>
                <label for="namaToko" style="font-size: 15px;"><b>Nama Toko</b></label>
                <input type="text" id="namaToko" name="namaToko" placeholder="Nama Toko">
                <p>Nama dapat dilihat oleh pelanggan</p>
                <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
    <div id="emailTokoModal" class="EditToko" style="display: none;">
        <div class="toko-content">
            <span class="close">&times;</span>
            <div class="ctr-toko">
                <h2><b>Ubah Email Toko</b></h2>
                <p>Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan email sudah benar</p>
                <label for="emailToko" style="font-size: 15px;"><b>Email Toko</b></label>
                <input type="text" id="emailToko" name="emailToko" placeholder="Email Toko">
                <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
    <div id="noHpTokoModal" class="EditToko" style="display: none;">
        <div class="toko-content">
            <span class="close">&times;</span>
            <div class="ctr-toko">
                <h2><b>Ubah Nomor HP Toko</b></h2>
                <p>Kamu hanya dapat mengubah nama 1 kali lagi. Pastikan nomor HP sudah benar</p>
                <label for="noHpToko" style="font-size: 15px;"><b>Nomor HP</b></label>
                <input type="text" id="noHpToko" name="noHpToko" placeholder="Nomor HP Toko">
                <button type="submit">Simpan</button>
            </div>
        </div>
    </div>
    <div id="alamatTokoModal" class="EditToko" style="display: none;">
        <div class="toko-content">
            <span class="close">&times;</span>
            <div class="ctr-toko">
                <h2><b>Ubah Alamat Toko</b></h2>
                <p>Kamu hanya dapat mengubah alamat 1 kali lagi. Pastikan alamat sudah benar.</p>
                <form>
                    <div class="keterangan">
                        <label for="keteranganTempat" style="font-size: 15px;">Keterangan Tempat</label>
                        <textarea id="keteranganTempat" name="keteranganTempat" rows="4" placeholder="Diisi keterangan tempat dan nama jalan alamatmu"></textarea>
                        {{-- <input type="text" id="tempat-keterangan" name="tempat-keterangan" placeholder="Diisi keterangan tempat dan nama jalan alamatmu"> --}}
                    </div>
                    {{-- <div class="keterangan">
                        <label for="rt" style="font-size: 15px;">RT</label>
                        <input type="text" id="rt-toko" name="rt">
                    </div>
                    <div class="keterangan">
                        <label for="rw" style="font-size: 15px;">RW</label>
                        <input type="text" id="rw-toko" name="rw">
                    </div> --}}
                    <div class="keterangan rt-rw-container">
                        <div class="rt-container">
                            <label for="rt" style="font-size: 15px;">RT</label>
                            <input type="text" id="rt" name="rt">
                        </div>
                        <div class="rw-container">
                            <label for="rw" style="font-size: 15px;">RW</label>
                            <input type="text" id="rw" name="rw">
                        </div>
                    </div>
                    <div class="keterangan">
                        <label for="desa" style="font-size: 15px;">Desa / Kelurahan</label>
                        <input type="text" id="desa-toko" name="desa" placeholder="Nama Desa atau Kelurahan">
                    </div>
                    <div class="keterangan">
                        <label for="kecamatan" style="font-size: 15px;">Kecamatan</label>
                        <input type="text" id="kecamatan-toko" name="kecamatan" placeholder="Nama Kecamatan">
                    </div>
                    <div class="keterangan">
                        <label for="kabupaten" style="font-size: 15px;">Kabupaten / Kota</label>
                        <input type="text" id="kabupaten-toko" name="kabupaten" placeholder="Nama Kabupaten atau Kota">
                    </div>
                    <div class="keterangan">
                        <label for="lokasi" style="font-size: 15px;">Lokasi gmap</label>
                        <a href="#" class="map-link" id="">Tentukan lokasi</a>
                    </div>
                    <button type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script-field')

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var namaTokoModal = document.getElementById("namaTokoModal");
        var emailTokoModal = document.getElementById("emailTokoModal");
        var noHpTokoModal = document.getElementById("noHpTokoModal");
        var alamatTokoModal = document.getElementById("alamatTokoModal");
        var ubahNamaTokoBtn = document.getElementById("ubahNamaTokoBtn");
        var ubahEmailTokoBtn = document.getElementById("ubahEmailTokoBtn");
        var ubahNoHpTokoBtn = document.getElementById("ubahNoHpTokoBtn");
        var ubahAlamatTokoBtn = document.getElementById("ubahAlamatTokoBtn");
        var closeButtons = document.querySelectorAll(".close");

        function openModal(modal) {
            modal.style.display = "block";
        }

        function closeModal(modal) {
            modal.style.display = "none";
        }

        ubahNamaTokoBtn.addEventListener("click", function() {
            openModal(namaTokoModal);
        });

        ubahEmailTokoBtn.addEventListener("click", function() {
            openModal(emailTokoModal);
        });

        ubahNoHpTokoBtn.addEventListener("click", function() {
            openModal(noHpTokoModal);
        });

        ubahAlamatTokoBtn.addEventListener("click", function() {
            openModal(alamatTokoModal);
        });

        closeButtons.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var modal = btn.closest(".EditToko");
                closeModal(modal);
            });
        });

        window.addEventListener("click", function(event) {
            if (event.target.classList.contains("EditToko")) {
                closeModal(event.target);
            }
        });
    });
</script>

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var namaTokoModal = document.getElementById("namaTokoModal");
        var emailTokoModal = document.getElementById("emailTokoModal");
        var noHpTokoModal = document.getElementById("noHpTokoModal");
        var alamatTokoModal = document.getElementById("alamatTokoModal");
        var ubahNamaTokoBtn = document.getElementById("ubahNamaTokoBtn");
        var ubahEmailTokoBtn = document.getElementById("ubahEmailTokoBtn");
        var ubahNoHpTokoBtn = document.getElementById("ubahNoHpTokoBtn");
        var ubahAlamatTokoBtn = document.getElementById("ubahAlamatTokoBtn");
        var closeButtons = document.querySelectorAll(".close");

        function openModal(modal) {
            modal.style.display = "block";
        }

        function closeModal(modal) {
            modal.style.display = "none";
        }

        ubahNamaTokoBtn.addEventListener("click", function() {
            openModal(namaTokoModal);
        });

        ubahEmailTokoBtn.addEventListener("click", function() {
            openModal(emailTokoModal);
        });

        ubahNoHpTokoBtn.addEventListener("click", function() {
            openModal(noHpTokoModal);
        });

        ubahAlamatTokoBtn.addEventListener("click", function() {
            openModal(alamatTokoModal);
        });

        closeButtons.forEach(function(btn) {
            btn.addEventListener("click", function() {
                var modal = btn.closest(".EditToko");
                closeModal(modal);
            });
        });

        window.addEventListener("click", function(event) {
            if (event.target.classList.contains("EditToko")) {
                closeModal(event.target);
            }
        });
    });
</script> --}}



@endsection
