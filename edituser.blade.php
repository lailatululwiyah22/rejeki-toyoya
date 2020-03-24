<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">	
<!--===============================================================================================-->
</head>
<body>
<div class="table table-striped table-hover table-sm table-bordered">
		<div class="form-grup">
	<h2>Edit User</h2>
	<a href="/user"> Kembali</a>
	<br/>
	<br/>

	@foreach($user as $u)
	<form action="/user/update" method="post" enctype="multipart/form-data" name="form_edit_post" 
	id="form_edit_post" class="table table-striped table-hover table-sm table-bordered">
		{{ csrf_field() }}
		<input type="hidden" name="no" value="{{ $u->no }}"> <br/>
				<lable>Id_User  :</lable>
				<input type="text" required="required" name="id" value ="{{ $u->id }}" class="form-group"><br>
				<lable>Username :</lable>
				<input type="text" required="required" name="username" value ="{{ $u->username }}" class="form-group"><br>
				<lable>Alamat :</lable>
				<input type="text" required="required" name="alamat" value ="{{ $u->alamat }}" class="form-group"><br>
				<lable>No_KK :</lable>
				<input type="text" required="required" name="no_kk" value ="{{ $u->no_kk }}" class="form-group"><br>
				
				<input type="submit"  value="edit" class="btn btn-success">			

	</form>
	@endforeach
	</div>
	</div>	

</body>
</html>