<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/homecss/homeview.css') }}" rel="stylesheet" />
	<script src = "{{ URL::asset('js/homejs/home.js') }}"></script>
	<title>Halaman Toko</title>
</head>
</body>
	<img src = "{{ URL::asset('images/homeimages/Danusan.png') }}" class = "danusan">
	<div class = "kanan-atas">
		<img src = "{{ URL::asset('images/homeimages/Vector1.png') }}" class = "orang-dalem">
		<img src = "{{ URL::asset('images/homeimages/Vector2.png') }}" class = "lingkar-luar">
		<span class = 'username'> Username</span>
	</div>
	<img src = "{{ URL::asset('images/homeimages/Rectangle 29.png') }}" class = "gambarutama">
	<img src = "{{ URL::asset('images/homeimages/Rectangle 32.png') }}" class = "kotaktengah">
	<img src = "{{ URL::asset('images/homeimages/Hot To Order.png') }}" class = "caraorder">
	<div class = "tulisantengah">
		<span class = "attention">Anda Harus Login untuk melihat toko.<br>Silahkan kembali ke halaman sebelumnya.</span>
	</div>
	<div class = "kotaktoko">
		<div class = "header">
			<input type = "text" placeholder = "Search the store" class ="search">
			<input type = "submit" class= "search-button" value = "Search">

			@php
				$tinggi = 250
			@endphp
        	@foreach ($toko as $pemilik)
        		@php
        			$alamat = DB::table('alamat')->where('id', $pemilik->idalamat)->first();
        		@endphp
    			<div class = "etalase" style = "top: <?php echo $tinggi?>px">
    				<form method = "post" action = >
    					{{ csrf_field() }}
    				<img src = "{{ URL::asset('images/homeimages/arrow.png')}}" class = "gambar-etalase">
    				<span class = "tulisan-etalase">{{ $pemilik->namatoko }}</span>
    				<span class = "alamat-etalase">{{ $alamat->jalan }}, {{ $alamat->kabupatenkota}}, {{ $alamat->provinsi }} </span>
    				<input type = "submit" value = "Lihat Toko" class = "tombol-etalase">
    				</form>
    			</div>
    			@php
    			$tinggi+=250
    			@endphp
    		@endforeach
			
		</div>
	</div>
	<img src = "{{ URL::asset('images/homeimages/tandaseru.png') }}" class = "tandaseru">
	<a href = "{{ url('/') }}">
		<img src = "{{ URL::asset('images/homeimages/arrow.png') }}" class = "arrow">
	</a>
</body>
</html>