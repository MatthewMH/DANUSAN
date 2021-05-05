<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/signupcss/main.css') }}" rel="stylesheet" />
	<title>Sign Up</title>
</head>
<body>
	<div class="v0_3">
		<a href = "{{ url('/') }}">
			<img src = "{{ URL::asset('images/signupimages/arrow.png') }}" class = "arrow">
		</a>
		<img src = "{{ URL::asset('images/signupimages/Danusan.png') }}" class = "danusan">
		<img src = "{{ URL::asset('images/signupimages/vektor sign up page.png') }}" class = "gambarkiri">
		<img src = "{{ URL::asset('images/signupimages/Rectangle 26.png') }}" class = "kotak">
		<div class="v414_26">
		<span class="v409_90">Sign Up </span>
			<div class="v409_91">

				<label for="email" class = "v409_94">Email:</label><br>
				<input type="text" id="email" name="email" class = "v409_93 "><br>

				<label for="username" class = "v409_97">Username</label><br>
				<input type="text" id="username" name="username" class = "v409_96"><br>

				<label for="telepon" class = "v409_100">No.Telepon</label><br>
				<input type="text" id="telepon" name="telepon" class = "v409_99"><br>

				<label for="password" class = "v409_103">Password</label><br>
				<input type="text" id="password" name="password" class = "v409_102"><br>

				<label for="konfirmpassword" class = "v409_106">Konfirmasi Password</label><br>
				<input type="text" id="konfirmpassword" name="konfirmpassword" class = "v409_105"><br>

			</div>
		</div>
		<a href = "">
			<div class = "kotaksignup">
				<span class = "tulisansignup">Sign Up</span>
			</div>
		</a>
		<img src = "{{ URL::asset('images/signupimages/v178_142.png') }}" class = "gambarkanan">
</body>
</html>