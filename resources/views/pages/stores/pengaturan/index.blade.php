@extends('layouts.store.index')
@section('titlePage', 'Pengaturan Toko')

{{-- @section('head-field')
<link rel="stylesheet" href="{{ asset('assets/components/css/stores/pengaturan.css') }}">
@endsection --}}
@section('head-link-field')
<link rel="stylesheet" href="{{ asset('assets/css/stores/pengaturan2.css') }}">
@endsection

@section('head-style-field')

@endsection

@section('main-content-store')

  {{-- <div class="container">
    <div class="card">
      <div class="card-header">
        Pengaturan Toko
      </div>
      <div class="card-body">
        <div class="logo-container">
          <img class="logo" src="https://i.imgur.com/vS3Yz2k.png" alt="Logo Toko">
          <div class="logo-text">
            Pilih Logo Toko
          </div>
          <div class="logo-text">
            Besar file: maksimum 10.000.000 bytes (10 MB).
          </div>
          <div class="logo-text">
            Ekstensi file yang diperbolehkan: .JPG, .JPEG, .PNG
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            Ubah Profil Toko
          </div>
          <div class="card-body">
            <div class="form-group">
              <div class="label">
                Nama Toko
              </div>
              <div class="input">
                Awan Laundry
              </div>
              <button class="button">
                Ubah
              </button>
            </div>
            <div class="form-group">
              <div class="label">
                Email
              </div>
              <div class="input">
                awanLaundry@gamil.com
              </div>
              <button class="button">
                Ubah
              </button>
            </div>
            <div class="form-group">
              <div class="label">
                No. Hp
              </div>
              <div class="input">
                08123456789
              </div>
              <button class="button">
                Ubah
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            Ubah Alamat
          </div>
          <div class="card-body">
            <div class="address-text">
              Keterangan Jl. nama jalan, RT.0/RW.0, Nama blok, Nama Desa, Nama Kecamatan, Nama Kabupaten
            </div>
            <div class="address-text">
              <a class="map-link" href="https://www.google.com/maps">Terkoneksi dengan gmap</a>
            </div>
            <button class="button">
              Ubah Alamat
            </button>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="container">
    <div class="card">
      <div class="card-header">
        Pengaturan Toko
      </div>
      <div class="card-body">
        <div class="logo-container">
          <img class="logo" src="https://i.imgur.com/vS3Yz2k.png" alt="Logo Toko">
          <div class="logo-text">
            Pilih Logo Toko
          </div>
          <div class="logo-text">
            Besar file: maksimum 10.000.000 bytes (10 MB).
          </div>
          <div class="logo-text">
            Ekstensi file yang diperbolehkan: .JPG, .JPEG, .PNG
          </div>
          <button class="button">
            Ubah Logo
          </button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Ubah Profil dan Alamat
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="label">
            Nama Toko
          </div>
          <div class="input">
            Awan Laundry
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="form-group">
          <div class="label">
            Email
          </div>
          <div class="input">
            awanLaundry@gamil.com
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="form-group">
          <div class="label">
            No. Hp
          </div>
          <div class="input">
            08123456789
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="address-text">
          Keterangan Jl. nama jalan, RT.0/RW.0, Nama blok, Nama Desa, Nama Kecamatan, Nama Kabupaten
        </div>
        <div class="address-text">
          <a class="map-link" href="https://www.google.com/maps">Terkoneksi dengan gmap</a>
        </div>
        <button class="button">
          Ubah Alamat
        </button>
      </div>
    </div>
  </div> --}}

  <div class="container">
    <div class="card">
      <div class="card-header">
        Pengaturan Logo
      </div>
      <div class="card-body">
        <div class="logo-container">
          <img class="logo" src="https://i.imgur.com/vS3Yz2k.png" alt="Logo Toko">
          <div class="logo-text">
            Pilih Logo Toko
          </div>
          <div class="logo-text">
            Besar file: maksimum 10.000.000 bytes (10 MB).
          </div>
          <div class="logo-text">
            Ekstensi file yang diperbolehkan: .JPG, .JPEG, .PNG
          </div>
          <button class="button">
            Ubah Logo
          </button>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        Ubah Profil dan Alamat
      </div>
      <div class="card-body">
        <div class="form-group">
          <div class="label">
            Nama Toko
          </div>
          <div class="input">
            Awan Laundry
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="form-group">
          <div class="label">
            Email
          </div>
          <div class="input">
            awanLaundry@gamil.com
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="form-group">
          <div class="label">
            No. Hp
          </div>
          <div class="input">
            08123456789
          </div>
          <button class="button">
            Ubah
          </button>
        </div>
        <div class="address-text">
          Keterangan Jl. nama jalan, RT.0/RW.0, Nama blok, Nama Desa, Nama Kecamatan, Nama Kabupaten
        </div>
        <div class="address-text">
          <a class="map-link" href="https://www.google.com/maps">Terkoneksi dengan gmap</a>
        </div>
        <button class="button">
          Ubah Alamat
        </button>
      </div>
    </div>
  </div>
@endsection

@section('script-field')
@endsection
