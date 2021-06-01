<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/homecss/homesearch.css') }}" rel="stylesheet" />
	<title>Search</title>
</head>
<body>
	<a href = "{{ url('/home/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/loginimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/homeimages/Danusan.png') }}" class = "danusan">
	<div class = "kotak-tulisan">
		<h1 class = "tulisan-utama"> Search Results </h1>
	</div>
	@if($toko == NULL)
		<h2 class = "not-found">Store not found!</h2>
	@else
		<div class = "etalase" style = "top: 200px">
			<form method = "post" action = "{{ url('/home/'.$toko->namatoko.'/'.Auth()->user()->id) }}">
    					{{ csrf_field() }}
    		<img src = "{{ URL::asset('external_images/'.$toko->namatoko.'/'.$toko->gambartoko)}}" class = "gambar-etalase">
    		<input type = "text" class = "tulisan-etalase" value = "{{ $toko->namatoko }}" name = "toko"readonly>    		
    		<input type = "text" class = "alamat-etalase" value = "{{ $alamat->where('id', $toko->idalamat)->first()->jalan }}, {{ $alamat->where('id', $toko->idalamat)->first()->kabupatenkota}}, {{ $alamat->where('id', $toko->idalamat)->first()->provinsi }}" readonly>
    		<input type = "submit" value = "Lihat Toko" class = "tombol-etalase">
    		</form>
		</div>
	@endif
</body>
</html>
