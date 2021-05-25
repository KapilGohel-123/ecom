<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
	<center>
	<div class="card bg-dark" align="center" style="width: 400px;">
		<div class="card-header">
			<h1>Admin Login</h1>
		</div>
<form action="admindata" method="post">
	@csrf
	<div class="card-body">
	<input type="text" name="email" class="form-control" placeholder="Email"><br><br>
	<input type="password" name="pass" class="form-control" placeholder="password"><br><br>
	</div>
	<div class="card-footer">
	<input type="submit" name="" class="btn btn-success" value="Login">
	</div>
</form>
</div>
</center>
</div>
</body>
</html>