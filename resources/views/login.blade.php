<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/logincss/main.css') }}" rel="stylesheet" />
	<title>Login</title>
</head>
<body>
	<div class="v0_3">
		<a href = "{{ url('/') }}">
			<img src = "{{ URL::asset('images/loginimages/arrow.png') }}" class = "arrow">
		</a>
		<img src = "{{ URL::asset('images/loginimages/Danusan.png') }}" class = "danusan">
		<img src = "{{ URL::asset('images/loginimages/vektor sign up page.png') }}" class = "gambarkiri">
		<img src = "{{ URL::asset('images/loginimages/Rectangle 26.png') }}" class = "kotak">
		<form method = "post" action = "{{ url('/login') }}">
			{{ csrf_field() }}
			<div class="v414_26">
			<span class="v409_90">Login </span>
				<div class="v409_91">

					<label for="username" class = "v409_94">Username</label><br>
					<input type="username" id="username" name="username" class = "v409_93 "><br>

					<label for="password" class = "v409_97">Password</label><br>
					<input type="password" id="password" name="password" class = "v409_96"><br>

				</div>
			</div>
			<input type = "submit" class = "kotaksignup" value = "Login">
		</form>
		<img src = "{{ URL::asset('images/loginimages/v178_142.png') }}" class = "gambarkanan">
		<div>
			<span class = "belumakun">Belum Memiliki Akun? <a href = "{{ url('/signup') }}"><span class = "signupakun">Sign Up</span></a></span>
		</div>
</body>
</html>