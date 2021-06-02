<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/simpanancss/simpanan.css') }}" rel="stylesheet" />
	<title>Riwayat Pemesanan</title>
</head>
<body>
	<a href = "{{ url('/home/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/simpananimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/simpananimages/Danusan.png') }}" class = "danusan">
	<div class = "kanan-atas">
		@if(Auth()->user()->profil == NULL)
			<img src = "{{ URL::asset('images/simpananimages/Vector1.png') }}" class = "orang-dalem">
			<img src = "{{ URL::asset('images/simpananimages/Vector2.png') }}" class = "lingkar-luar">
		@else
			<img src = "{{ URL::asset('profile/'.Auth()->user()->username.'/'.Auth()->user()->profil) }}" class = "profil">
			<img src = "{{ URL::asset('images/simpananimages/Vector2.png') }}" class = "lingkar-luar">
		@endif
		<span class = 'username'> {{ Auth()->user()->username }} </span>
	</div>
	<div class = "penampung">
		@php
			$atas = 38;
			$i = 0;
		@endphp
		@foreach($chosennama as $nama)
				<div class = "kotak-dalem" style = "top : <?php echo $atas?>px">
					<form method = "post" action = " {{ url('home/'.$nama.'/'.Auth()->user()->id) }} ">
						{{ csrf_field() }}
						<input type = "text" value = "{{ $nama }}" class = "tulisan-dalem" name = "toko" readonly>
						<input type = "text" value = "{{ $chosenkontak[$i] }}" class = "telepon" name = "telepon" readonly>
						<input type = "submit" name = "View" value = "View" class = "button-view">
					</form>
				</div>
			@php
				$atas += 150;
			@endphp
		@endforeach
	</div>
</body>
</html>
