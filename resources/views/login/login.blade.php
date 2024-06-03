<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laundry</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login/login.css') }}">
    <link rel="icon" href="{{asset('assets/components/logoApp/Logo Awan Laundry.png')}}" type="image/x-icon">
</head>

<body>
    <div class="container">
		<div class="right">
			<p class="judul1"><b>Rasakan Kenyataan laundry praktis kami!<br>Tingkatkan kualitas hidup Anda mulai hari ini.</b></p>
            <img src="{{ asset('assets/components/icon/kurir.png') }}" alt="">
        </div>
		<div class="batas">

		</div>
        <div class="login">
            <form action="">
                <h3>AWAN LAUNDRY EXPRESS</h3>
                <p class="deskripsi">Selamat Datang di Awan Laundry <br>Silahkan Masuk Dengan Akun Anda</p>
                <label for="">Email</label>
                <input type="text" placeholder="example@gmail.com" style="background: #EDFAFF;">
                <label for="">Password</label>
                <input type="password" placeholder="Password" style="background: #EDFAFF;">
                <a class="lupaPW" href="{{ route('forgot_password') }}">Lupa Password?</a>
				<button>Login</button>
                <p class="or-line"><span> atau masuk dengan</span></p>
				<div class="button google">
					<button>
						<img src="{{ asset('assets/components/icon/google.png') }}" alt=""> Google
					</button>
				</div>
				<p class="daftar">Belum memiliki akun?
					<a href="{{ route('registerIndex') }}">Daftar Sekarang</a>
				</p>
            </form>
        </div>
    </div>
</body>

</html>
