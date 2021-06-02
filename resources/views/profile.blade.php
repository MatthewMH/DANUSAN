<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/profilcss/profil.css') }}" rel="stylesheet" />
	<title>Sunting Profil</title>
</head>
<body>
	<a href = "{{ url('/home/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/Profilimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/Profilimages/Danusan.png') }}" class = "danusan">

	<span class = "tulisan-email">Email</span>
	<input type = "text" name = "email" class = "email" value = "{{ Auth()->user()->email }}" readonly>

	<span class = "tulisan-username">Username</span>
	<input type = "text" name = "username" class = "username" value = "{{ Auth()->user()->username }}" readonly>

	<span class = "tulisan-kontak">Kontak</span>
	<input type = "text" name = "kontak" class = "kontak" value = "{{ Auth()->user()->kontak }}" readonly>

	@if(Auth()->user()->profil == NULL)
		<form method = "post" action = "{{ url('/editprofile/saves/'.Auth()->user()->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class = "kotak-foto">
			</div>
			<input type = "file" class = "button-foto" name = "fotoprofil">
			<input type = "submit" class = "tomboledit" value = "Edit">
		</form>
	@else
		<form method = "post" action = "{{ url('/editprofile/saves/'.Auth()->user()->id) }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class = "kotak-foto">
				<img src = "{{ URL::asset('profile/'.Auth()->user()->username.'/'.Auth()->user()->profil) }}" class = "profile">
			</div>
			<input type = "file" class = "button-foto" name = "fotoprofil">
			<input type = "submit" class = "tomboledit" value = "Edit">
		</form>
	@endif
</body>
</html>