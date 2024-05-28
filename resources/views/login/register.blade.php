<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Laundry</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login/register.css') }}">
    <link rel="icon" href="{{asset('assets/img/logoApp/[mobile]Logo Awan Laundry.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
		<div class="right">
			<p class="judul1">
				<b>Bergabunglah dengan Awan Laundry sekarang!<br>
				Daftar untuk layanan laundry terbaik<br>
				Mulailah perjalanan kenyamanan Anda hari ini!
				</b>
			</p>
            <img src="{{ asset('assets/components/icon/kurir.png') }}" alt="">
        </div>
		<div class="batas"></div>
        <div class="register">
			<!-- <div class="kembali">
				<a href="#" style="color: black; text-decoration: none;">Kembali</a>
			</div> -->
            @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('registerPost') }}" method="POST">
				<h3>Register</h3>
				<label for="">Nama</label>
                <input type="text" name="name" id="name" placeholder="Masukkan Nama Anda" style="background: #EDFAFF;" required>
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com" style="background: #EDFAFF;" required>
				<label for="">No Telpon</label>
                <input type="number" name="telp" id="telp" placeholder="Masukkan No Telpon Anda" style="background: #EDFAFF;" required>
                <label for="">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" style="background: #EDFAFF;" required>
				<label for="">Konfirmasi Password</label>
                <input type="password" name="password" id="password" placeholder="Konfirmasi Password" style="background: #EDFAFF;" required>
				<button type="submit" class="buat-akun">Buat Akun</button>
				<p class="already-have-account">Sudah memiliki akun?
					<a href="{{  route('loginIndex') }}" style="color: #D42A63; text-decoration: none;" >Login</a>
				</p>
                <p class="or-line" ><span>atau</span></p>
				<div class="button google">
					<button type="button">
						<img src="{{ asset('assets/components/icon/google.png') }}" alt="">Login dengan Google
					</button>
				</div>
            </form>
        </div>
    </div>
</body>

</html>
