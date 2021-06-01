<!DOCTYPE html>
<html>
<head>
	<title>Admin Input</title>
	<link href="https://fonts.googleapis.com/css?family=Lets+Espresso&display=swap" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
	<link href="{{ URL::asset('css/admincss/admininput.css') }}" rel="stylesheet" />
</head>
<body>
	<h2 style="text-align: center">Input to Database</h2>
	<form method = "post" action = "{{ url('admin/input/proses') }}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<span class = "toko">Toko</span><br>
		
		<label for = "namatoko" class = "tulisan-toko">Nama Toko</label><br>
		<input type = "text" name = "namatoko" class = "kotaknamatoko">
		
		<label for = "kontaktoko" class ="tulisan-kontaktoko">Kontak Toko</label><br>
		<input type = "text" name = "kontaktoko" class = "kotakkontaktoko">

		<label for = "gambartoko" class ="tulisan-gambartoko">Gambar Toko</label><br>
		<input type="file" name="gambartoko" class = "gambartoko">

		<span class = "alamat">Alamat</span><br>

		<label for = "jalan" class = "tulisan-jalan">Jalan</label><br>
		<input type = "text" name = "jalan" class = "kotakjalan">

		<label for = "kabupatenkota" class = "tulisan-kabupatenkota">Kabupaten/Kota</label><br>
		<input type = "text" name = "kabupatenkota" class = "kotakkabupatenkota">

		<label for = "provinsi" class = "tulisan-provinsi">Provinsi</label><br>
		<input type = "text" name = "provinsi" class = "kotakprovinsi">

		<span class = "makanan">Makanan</span>

		<label for = "namamakanan1" class = "tulisan-makanan1">Nama Makanan</label><br>
		<input type = "text" name = "namamakanan1" class = "kotakmakanan1">

		<label for = "harga1" class = "tulisan-harga1">Harga</label><br>
		<input type = "text" name = "harga1" class = "kotakharga1">

		<label for = "gambarmakanan1" class = "tulisan-gambarmakanan1">Gambar Makanan</label><br>
		<input type = "file" name = "gambarmakanan1" class = "gambarmakanan1">

		<label for = "namamakanan2" class = "tulisan-makanan2">Nama Makanan</label><br>
		<input type = "text" name = "namamakanan2" class = "kotakmakanan2">

		<label for = "harga2" class = "tulisan-harga2">Harga</label><br>
		<input type = "text" name = "harga2" class = "kotakharga2">

		<label for = "gambarmakanan1" class = "tulisan-gambarmakanan2">Gambar Makanan</label><br>
		<input type = "file" name = "gambarmakanan2" class = "gambarmakanan2">

		<label for = "namamakanan3" class = "tulisan-makanan3">Nama Makanan</label><br>
		<input type = "text" name = "namamakanan3" class = "kotakmakanan3">

		<label for = "harga3" class = "tulisan-harga3">Harga</label><br>
		<input type = "text" name = "harga3" class = "kotakharga3">

		<label for = "gambarmakanan1" class = "tulisan-gambarmakanan3">Gambar Makanan</label><br>
		<input type = "file" name = "gambarmakanan3" class = "gambarmakanan3">

		<input type = "text" name = "satu" value = "{{ $request->satu }}" style = "display:none;">
		<input type = "text" name = "dua" value = "{{ $request->dua }}" style = "display:none;">

		<input type = "submit" value = "Tambahkan" class = "tambahkan">

	</form>
</body>
</html>