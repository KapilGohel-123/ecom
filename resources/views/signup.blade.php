
@extends('master')
@section('content')
<div class="container">
	<center>
	<div class="card bg-dark" align="center" style="width: 400px;">
		<div class="card-header">
			<h1>Signup Form</h1>
		</div>
<form action="/signup" method="post">
	@csrf
	
	<div class="card-body">
	<input type="text" name="unm" class="form-control" placeholder="Username" required><br><br>
	<input type="text" name="email" class="form-control" placeholder="Email" required><br><br>

	<input type="password" name="pass" class="form-control" placeholder="password" required><br><br>

	<input type="password" name="cpass" class="form-control" placeholder=" Confirm password" required><br><br>
	</div>
	<div class="card-footer">
	<input type="submit" name="" class="btn btn-success" value="signup">
	</div>
</form>
</div>
</center>
</div>
@endsection
