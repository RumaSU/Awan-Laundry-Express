
<div class="field-pengantaran">
    @for ($i = 0; $i < 4; $i++)
    <div class="main-field-pengantaran">
        <div class="field-pesanan">
            <div class="main-field-pesanan-antar">
                <div class="head-pesanan-pengantaran">
                    <div class="left-hp-pengantaran">
                        <img src="{{ asset('assets/components/icon/bag-shopping.png') }}" alt="">
                        <div class="ket-left-hp-pengantaran">
                            <div class="nm-pesanan">
                                <p>Nama Toko</p>
                            </div>
                            <div class="id-pesanan">
                                <p>ID PESANAN</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-hp-pengantaran">
                        <button type="button">Konfirmasi</button>
                    </div>
                </div>
                <div class="main-pesanan-pengantaran">
                    <div class="left-m-pengantaran">
                        <div class="cont-logo">
                            IMG
                        </div>
                    </div>
                    <div class="middle-m-pengantaran">
                        <div class="jenis-pesanan">
                            <P>Layanan Kiloan dan Satuan</P>
                        </div>
                        <div class="alamat-maps">
                            <p>Gmaps</p>
                        </div>
                    </div>
                    <div class="right-field-pengantaran">
                        <div class="total-harga-pengantaran">
                            <p>Total Horga</p>
                        </div>
                        <div class="harga-pengantaran">
                            Rp. 190000
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="button-swipe">
            <button>Lihat Detail
                <div class="vertikal-button"></div>
            </button>
        </div>
    </div>
    @endfor
</div>