<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/landingcss/main.css') }}" rel="stylesheet" />
	<title>DANUSAN</title>
</head>
<body>
	<div class = "header">

		<a href="{{ url('/') }}">
			<img src = "{{ URL::asset('images/landingimages/Danusan.png') }}" class = "danusan" href = '/'>
		</a>

		<div class = "kanan_header">
			<a href = "{{ url('/view') }}">
				<div class = "toko">
					<span class = "tulisantoko">Toko</span> 
				</div>
			</a>

			<a href = "{{ url('/signup') }}">
				<div class = "signup">
					<span class = "tulisansignup">Sign Up</span>
				</div>
			</a>

			<a href = "{{ url('/login') }}">
				<div class = "login">
					<span class = "tulisanlogin">Login</span>	
				</div>
			</a>
			
		</div>
	</div>
	
	<img src = "{{ URL::asset('images/landingimages/Group 13.png') }}" class = "group13">

	<div class = "logo">
		<img src = "{{ URL::asset('images/landingimages/danus.png') }}" width = "438px" height = "417px" class = "logo">
	</div>

	<div class="v156_45">
		<div class="name">
		</div>
		</div>
		<div class="v71_43">
			<span class="v3_18">merupakan platform yang mempermudah pencarian barang jualan untuk kegiatan penggalangan dana. Silakan buat akun atau masuk dengan akun yang ada untuk mencari barang jualan sesuai keinginanmu.  </span>
			<img src = "{{ URL::asset('images/landingimages/Danusanhitam.png') }}">
		</div>
		<span class="tulisanbold">We’re Here Welcoming The Fundraiser!</span><br>
		<span class="tulisanbiasa">Mulai temukan dengan mudah barang jualan danusanmu disini. Selamat danusan :)</span>
<div class="v155_50">
	<img src = "{{ asset('images/landingimages/v153_56.png') }}" class="v153_56">
		
	<div class="v153_69">
		
	</div>
	<img src = "{{ asset('images/landingimages/v153_50.png') }}" class="v153_50">
		
	<div class="v153_58">
		
	</div>
	<div class="v153_68">
		
	</div>
	<span class="v153_60">disini tersedia berbagai pilihan toko dan makanan danusan dan kontak untuk menghubungi penjual toko.</span>
	<span class="v155_45">kamu juga bisa melakukan kesepakatan dengan penjual.</span>
	<span class="v153_64">disini kamu dapat mengestimasi total pesanan yang telah dipesan.</span>
	<img src = "{{ asset('images/landingimages/v153_51.png') }}" class="v153_51">
</div>
</div>
</body>
</html>
