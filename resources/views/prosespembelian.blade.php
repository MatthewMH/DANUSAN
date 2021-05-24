<!DOCTYPE html>
<html>
<head>
	<link href="{{ URL::asset('css/prosespembeliancss/prosespembelian.css') }}" rel="stylesheet" />
	<script src = "{{ URL::asset('js/prosespembelianjs/prosespembelian.js') }}"></script>
	<title>Proses Pembelian</title>
</head>
<body>
	<h1 class = "judul"> Pembelian {{ $request->namamakanan }}</h1>
	<a href = "{{ url('/home/'.$request->namatoko.'/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/prosespembelianimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/prosespembelianimages/Danusan.png') }}" class = "danusan">
	<div class = "kotak">
		<form method = "post" action = "{{ url('/process') }}">
			{{ csrf_field() }}
			<img src = "{{ URL::asset('external_images/'.$request->namatoko.'/'.$request->namamakanan.'.jpg') }}" class = "gambar">
			<label for = "counter" class = "tulisan-jumlah">Jumlah Pembelian</label><br>
			<input type = "number" id = "counter" name = "counter" min = "10" step = "10" value = "10" class = "counter">
			<input type = "text" name = "harga" value = "{{ $request->harga }}" style = "display: none;">
			<input type = "text" name = "namamakanan" value = "{{ $request->namamakanan }}" style = "display: none;">
			<input type = "text" name = "namatoko" value = "{{ $request->namatoko }}" class = "tulisan-toko" readonly>
			<input type = "submit" class = "cancel" value = "Cancel" name = "cancel">
			<input type = "submit" class = "buy" value = "Buy" name = "buy">
		</form>
	</div>
</body>
</html>