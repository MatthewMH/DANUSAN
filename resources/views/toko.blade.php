<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/tokocss/toko.css') }}" rel="stylesheet" />
	<script src = "{{ URL::asset('js/tokojs/toko.js') }}"></script>
	<title>Toko</title>
</head>
<body>
	<a href = "{{ url('/home/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/tokoimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/tokoimages/Danusan.png') }}" class = "danusan">
	<div class = "kanan-atas">
		<img src = "{{ URL::asset('images/tokoimages/Vector1.png') }}" class = "orang-dalem">
		<img src = "{{ URL::asset('images/tokoimages/Vector2.png') }}" class = "lingkar-luar">
		<span class = 'username'> {{ Auth()->user()->username }} </span>
	</div>
	<div class = "kotak-nama">
		<form method = "post" action = "{{ url('/saved') }}">
			{{ csrf_field() }}
			<input type = "text" class = "tulisan-toko" value = "{{ $toko->namatoko }}" name = "namatoko"readonly><br>
			@if(!$simpan)
				<input type = 'submit' class = 'save-button' value = 'Save Store'>
			@else
				<input type = 'submit' class = 'delete-button' value = 'Delete'>
			@endif
		</form>
		<img src = "{{ URL::asset('images/tokoimages/contact.png') }}" class = "telepon">
		<span class = "tulisan-telepon">{{ $toko->kontaktoko }}</span>
	</div>
	<div class = "pajangan">
		@php
			$kiri = 30
		@endphp
		@foreach($makanan as $makanan)
		<div class = "etalase-makanan" style = "left : <?php echo $kiri?>px">
			<form method = "post" action = "{{ url('/home/'.$toko->namatoko.'/'.$makanan->namamakanan.'/pembelian/'.Auth()->user()->id) }}">
				{{ csrf_field() }}
				<input type = "text" class = "harga" value = "Rp {{ $makanan->harga }}" name = "harga"readonly>
				<img src = "{{ URL::asset('external_images/'.$toko->namatoko.'/'.$makanan->namamakanan.'.jpg') }}" class = "gambar">
				<input type = "text" class = "nama-makanan" value = "{{ $makanan->namamakanan }}" name = "namamakanan" readonly>
				<input type = "submit" class = "button-beli" value = "Add to cart" readonly>
				<input type = "text" value = "{{ $toko->namatoko }}" name = "namatoko" class = "hidden-toko" >
			</form>
			<img src = "{{ URL::asset('images/tokoimages/keranjang.png') }}" class = "keranjang">
		</div>
		@php
			$kiri += 450
		@endphp
		@endforeach
	</div>
</body>
</html>