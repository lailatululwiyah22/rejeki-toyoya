<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
	<!--===============================================================================================-->
	<!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-group">
	<h2><a href="/schedulehaji">Lihat User</a></h2>
	<h3>Data User</h3>

	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>
	<br>
<form action="/user/store" method="POST" class="table table-striped table-hover table-sm table-bordered">
{{ csrf_field() }}
	<lable>Id_User:</lable>
	 	<input type="text" name="id" class="form-group"><br>
	<lable>Username</lable>
 		<input type="text" name="username" class="form-group"><br>
	<lable>Alamat:</lable>
 		<input type="text" name="alamat" class="form-group"><br>
	<lable>No_KK: </lable>
		<input type="text" name="no_kk" class="form-group"><br>
	
<input type="submit"  value="Add" class="btn btn-primary">
</form>
	
</body>
</html>