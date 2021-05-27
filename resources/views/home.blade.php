<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/homecss/home.css') }}" rel="stylesheet" />
	<script src = "{{ URL::asset('js/homejs/home.js') }}"></script>
	<title>Halaman Utama</title>
</head>
</body>	
	<div id = "rectangle" class = "sidenav">
		<div class = "test">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  		<form method = "post" action = "{{ url('/home/simpanan/'.Auth()->user()->id) }}">
	  			{{ csrf_field() }}
	  			<input type = "submit" value = "Saved" class = "coba">
	  		</form>
	  		<form method = "post" action = "{{ url('home/history/'.Auth()->user()->id) }}">
	  			{{ csrf_field() }}
	  			<input type = "submit" value = "History" class = "coba">
	  		</form>
	  		<form method = "post" action = "{{ url('/') }}">
	  			{{ csrf_field() }}
	  			<input type = "submit" value = "Log Out" class = "coba">
	  		</form>
	  	</div>
	</div>
	<span style="font-size:85px;cursor:pointer" onclick="openNav()" class = "button">&#9776;</span>
	<img src = "{{ URL::asset('images/homeimages/Danusan.png') }}" class = "danusan">
	<div class = "kanan-atas">
		<img src = "{{ URL::asset('images/homeimages/Vector1.png') }}" class = "orang-dalem">
		<img src = "{{ URL::asset('images/homeimages/Vector2.png') }}" class = "lingkar-luar">
		<span class = 'username'> {{ Auth()->user()->username }} </span>
	</div>
	<img src = "{{ URL::asset('images/homeimages/Rectangle 29.png') }}" class = "gambarutama">
	<img src = "{{ URL::asset('images/homeimages/Rectangle 32.png') }}" class = "kotaktengah">
	<img src = "{{ URL::asset('images/homeimages/Hot To Order.png') }}" class = "caraorder">
	<div class = "tulisantengah">
		<span class = "attention">Attention, Fundraiser!</span> <br>
		<span class = "sisanya">Pesanan dapat diambil pada toko yang bersangkutan dalam waktu 3 hari setelah waktu pemesanan.</span>
	</div>
	<div class = "kotaktoko">
		<div class = "header">
			<form action = "{{ url('home/search/'.Auth()->user()->id) }}" method = "post" role = "search">
				{{ csrf_field() }}
				<input type = "text" id = "search" name = "search" placeholder = "Search for store" class ="search">
				<input type = "submit" class= "search-button" value = "Search">
			</form>
		</div>
			@php
				$tinggi = 250
			@endphp
        	@foreach ($toko as $pemilik)
    			<div class = "etalase" style = "top: <?php echo $tinggi?>px">
    				<form method = "post" action = "{{ url('/home/'.$pemilik->namatoko.'/'.Auth()->user()->id) }}">
    					{{ csrf_field() }}
    				<img src = "{{ URL::asset('external_images/'.$pemilik->namatoko.'/Profile.jpg')}}" class = "gambar-etalase">
    				<input type = "text" class = "tulisan-etalase" value = "{{ $pemilik->namatoko }}" name = "namatoko" readonly>
    				<input type ="text" class = "alamat-etalase" value = "{{ $alamat->where('id', $pemilik->idalamat)->first()->jalan }}, {{ $alamat->where('id', $pemilik->idalamat)->first()->kabupatenkota}}, {{ $alamat->where('id', $pemilik->idalamat)->first()->provinsi }}" name = "alamat" readonly>
    				<input type = "submit" value = "Lihat Toko" class = "tombol-etalase">
    				</form>
    			</div>
    			@php
    				$tinggi+=250
    			@endphp
    		@endforeach
		</div>
	</div>
	<img src = "{{ URL::asset('images/homeimages/CombinedShape.png') }}" class = "orang">
</body>
</html>
