
@extends('master')
@section('content')
<div class="container">
	<center>
	<div class="card bg-dark" align="center" style="width: 400px;">
		<div class="card-header">
			<h1>User Login</h1>
		</div>
<form action="userdata" method="post">
	@csrf
	<div class="card-body">
	<input type="text" name="email" class="form-control" placeholder="Username"><br><br>
	<input type="password" name="pass" class="form-control" placeholder="password"><br><br>
	</div>
	<div class="card-footer">
	<input type="submit" name="" class="btn btn-success" value="Login">
	</div>
</form>
</div>
</center>
</div>
@endsection
