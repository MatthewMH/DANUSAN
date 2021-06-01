<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link href="{{ URL::asset('css/admincss/admin.css') }}" rel="stylesheet" />
</head>
<body>
	<img src = "{{ URL::asset('images/loginimages/Rectangle 26.png') }}" class = "kotak">
	<div class = "kotak-dalem">
		<span class = "tulisan">Admin Login</span>
		<form method = "post" action = "{{ url('/admin/input') }}">
			{{ csrf_field() }}
			<input type = "password" class = "placeholder1" name = "satu">
			<input type = "password" class = "placeholder2" name = "dua">
			<input type = "submit" class = "sub" value = "Login">
		</form>
	</div>
</body>
</html>