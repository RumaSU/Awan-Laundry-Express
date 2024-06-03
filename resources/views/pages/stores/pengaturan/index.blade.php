@extends('layouts.store.index')
@section('titlePage', 'Pengaturan Toko')

@section('head-field')
<link rel="stylesheet" href="{{ asset('assets/css/stores/pengaturan.css') }}">
@endsection

@section('main-content')
<div class="container">
    <div class="card">
      <h2 class="card-title">Pengaturan Toko</h2>
      <p>Lihat dan update profil toko Anda</p>
      <div class="card-logo">
        <img src="logo.png" alt="Logo Toko" class="card-logo-img">
        <button class="card-button">Pilih Logo Toko</button>
        <p>Besar file: maksimum 10.000.000 bytes (10 MB).<br>
          Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG</p>
      </div>
      <div class="card-content">
        <h3 class="card-title">Ubah Profil Toko</h3>
        <div class="card-field">
          <label for="nama-toko" class="card-label">Nama Toko</label>
          <input type="text" id="nama-toko" class="card-input" value="Awan Laundry">
          <button class="card-button">Ubah</button>
        </div>
        <div class="card-field">
          <label for="email" class="card-label">Email</label>
          <input type="email" id="email" class="card-input" value="awanLaundry@gamil.com">
          <button class="card-button">Ubah</button>
        </div>
        <div class="card-field">
          <label for="no-hp" class="card-label">No. Hp</label>
          <input type="tel" id="no-hp" class="card-input" value="08123456789">
          <button class="card-button">Ubah</button>
        </div>
        <div class="card-alamat">
          <h3 class="card-title">Ubah Alamat</h3>
          <p class="card-alamat-text">Keterangan Jl. nama jalan, RT.0/RW.0, Nama blok, Nama Desa, Nama Kecamatan, Nama Kabupaten</p>
          <textarea class="card-alamat-input" placeholder="Masukkan alamat toko Anda"></textarea>
          <p>Terkoneksi dengan gmap</p>
          <button class="card-alamat-button">Ubah Alamat</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script-field')
@endsection
