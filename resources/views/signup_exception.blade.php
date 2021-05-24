<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/SignUpLogin_exceptioncss/main.css') }}" rel="stylesheet" />
	<title>Sign Up</title>
</head>
<body>
	<div class="v0_3">
		<a href = "{{ url('/') }}">
			<img src = "{{ URL::asset('images/signup_exceptionimages/arrow.png') }}" class = "arrow">
		</a>
		<img src = "{{ URL::asset('images/signup_exceptionimages/Danusan.png') }}" class = "danusan">
		<img src = "{{ URL::asset('images/signup_exceptionimages/vektor sign up page.png') }}" class = "gambarkiri">
		<img src = "{{ URL::asset('images/signup_exceptionimages/Rectangle 26.png') }}" class = "kotak">
		<form action = "/signup">
			<div class="v414_26">
			<span class="v409_90">Sign Up</span>
				<div class="v409_91">
					<span class = "tulisan">Email/Username/Kontak telah dipakai. Silahkan ganti dengan yang lain.</span>
				</div>
			</div>
			<input type = "submit" class = "kotaksignup" value = "Back">
		</form>
		<img src = "{{ URL::asset('images/signup_exceptionimages/v178_142.png') }}" class = "gambarkanan">
</body>
</html>