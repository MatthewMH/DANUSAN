<!DOCTYPE html>
<html>
<head>
	<link href="{{ URL::asset('css/konfirmasipembeliancss/konfirmasipembelian.css') }}" rel="stylesheet" />
	<title>Konfirmasi Pembelian</title>
</head>
<body>
	@php
		$harga = (int)substr($request->harga, 3);
	@endphp
	<h1 class = "judul"> Konfirmasi Pembelian <br> {{ $request->namamakanan }}</h1>
	<div class = "kotak">
		<input type = "text" name = "namatoko" value = "{{ $request->namatoko }}" class = "tulisan-toko" readonly>
		<img src = "{{ URL::asset('external_images/'.$request->namatoko.'/'.$request->namamakanan.'.jpg') }}" class = "gambar">
		<p class = "nama-makanan">Nama Makanan : {{ $request->namamakanan }}</p>
		<p class = "jumlah-pembelian">Jumlah Pembelian : {{ $request->counter }}</p>
		<p class = "satuan">Harga Satuan : {{ substr($request->harga, 3) }}</p>
		<p class = "total"> Total Harga: {{ $harga * $request->counter}}</p>
	</div>
	<div class = "tulisan">
		<p class = "teks-kanan">Segala Transaksi yang telah dilakukan tidak dapat dibatalkan. Silahkan melakukan pengambilan secara Cash On Delivery sesuai toko pesanan.</p>
		<form method = "post" action = "{{ url('/transaction') }}">
			{{ csrf_field() }}
			<input type = "text" name = "namatoko" value = "{{ $request->namatoko }}" style = "display: none;">
			<input type = "text" name = "namamakanan" value = "{{ $request->namamakanan }}" style = "display: none;">
			<input type = "text" name = "harga" value = "{{ $request->harga }}" style = "display: none;">
			<input type = "text" name = "jumlah" value = "{{ $request->counter }}" style = "display:none;">
			<input type = "text" name = "total" value = "{{ $harga * $request->counter }}" style = "display:none;">
			<input type = "submit" value = "Cancel" class = "cancel" readonly name = "cancel">
			<input type = "submit" value = "Buy" class = "buy" readonly name = "buy">
		</form>
	</div>
</body>
</html>