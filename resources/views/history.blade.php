<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/historycss/history.css') }}" rel="stylesheet" />
	<title>Riwayat Pemesanan</title>
</head>
<body>
	<a href = "{{ url('/home/'.Auth()->user()->id) }}">
		<img src = "{{ URL::asset('images/historyimages/arrow.png') }}" class = "arrow">
	</a>
	<img src = "{{ URL::asset('images/historyimages/Danusan.png') }}" class = "danusan">
	<div class = "kanan-atas">
		@if(Auth()->user()->profil == NULL)
			<img src = "{{ URL::asset('images/historyimages/Vector1.png') }}" class = "orang-dalem">
			<img src = "{{ URL::asset('images/historyimages/Vector2.png') }}" class = "lingkar-luar">
		@else
			<img src = "{{ URL::asset('profile/'.Auth()->user()->username.'/'.Auth()->user()->profil) }}" class = "profil">
			<img src = "{{ URL::asset('images/historyimages/Vector2.png') }}" class = "lingkar-luar">
		@endif
		<span class = 'username'> {{ Auth()->user()->username }} </span>
	</div>
	<div class = "kotak-tulisan">
		<span class = "tulisan-riwayat">Riwayat Pemesanan</span>
	</div>
	<table class = "tabel">
		<tr class = "header-tabel">
			<th>TOKO</th>
			<th>PESANAN</th>
			<th>HARGA SATUAN</th>
			<th>JUMLAH PEMBELIAN</th>
			<th>TOTAL HARGA</th>
			<th>TANGGAL PEMESANAN</th>
			<th>DAPAT DIAMBIL</th>
			<th>STATUS</th>
		</tr>
		@php
			$i = 0;
			$now = date("d-m-Y");
			$now = strtotime($now);
		@endphp
		@foreach($transaksi as $transaksi)
			<tr>
				<th>{{ $tokonama[$i] }}</th>
				<th>{{ $makanannama2[$i] }}<br><img class = "gambartabel"src = "{{ URL::asset('external_images/'.$tokonama[$i].'/'.$makanannama[$i]) }}"></th>
				<th>Rp {{ $harga[$i]}}</th>
				<th>{{ $transaksi->jumlah }}</th>
				<th>Rp {{ $transaksi->totalharga }}</th>
				<th>{{ $transaksi->tanggaltransaksi }}</th>
				<th>{{ $transaksi->tanggalpengambilan }}</th>
				@php
					$take = strtotime($transaksi->tanggalpengambilan);
				@endphp
				@if($now > $take)
					<th>DONE</th>
				@else
					<th>IN PROGRESS</th>
				@endif
			</tr>
			@php
				$i++;
			@endphp
		@endforeach
	</table>
</body>
</html>
