@extends('layouts.store.index')
@section('titlePage', 'Toko saya')

@section('head-link-field')
    <link rel="stylesheet" href="{{ asset('assets/css/stores/maps.css') }}">
@endsection

@section('head-style-field')
    <!-- Add any additional styles here -->
@endsection

@section('main-content-store')
<section class="store-maps">
    <div class="topcontent-maps">
        <div class="container-maps">
            <p>Tampilan MAPS</p>
        </div>
    </div>
    <div class="middlecontent-maps">
        <div class="header-pengantaran">
            <div class="button-set-maps">
                <button class="pengantaran" onclick="showSection('pengantaran', this)">Pengantaran</button>
                <button class="penjemputan" onclick="showSection('penjemputan', this)">Penjemputan</button>
            </div>
        </div>
        <div class="container-pengantaran main-pengantaran">
            @include('pages.stores.maps.pengantaran')
        </div>
        <div class="container-penjemputan main-penjemputan" style="display:none;">
            @include('pages.stores.maps.penjemputan')
        </div>
        <script>
            function showSection(section, button) {
                // Hide all sections
                document.querySelector('.main-pengantaran').style.display = 'none';
                document.querySelector('.main-penjemputan').style.display = 'none';
                
                // Show the selected section
                document.querySelector('.main-' + section).style.display = 'block';

                // Remove active class from all buttons
                var buttons = document.querySelectorAll('.button-set-maps button');
                buttons.forEach(function(btn) {
                    btn.classList.remove('active');
                });

                // Add active class to the clicked button
                button.classList.add('active');
            }

            // Show the first section by default
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelector('.button-set-maps .pengantaran').click();
            });
        </script>
    </div>
</section>
@endsection

@section('different-content-store')
    <!-- Add any additional content here -->
@endsection

@section('script-field')
    <script src="{{ asset('assets/js/pages/stores/sLStr.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/pages/users/myAccount/autoSwipeSpecial.js') }}"></script> --}}
@endsection
