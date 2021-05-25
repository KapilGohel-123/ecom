@extends('Admin.master')
@section('Admin.content')
<div class="container"><br>
	<center><div class="card" align="center" style="width: 400px;">
		<div class="card-header">
			<h1>Add Category</h1>
		</div>
		<div class="card-body">
			<form action="{{route('category.store')}}" method="post">
				@csrf
				<input type="text" name="nm" placeholder="Category name" class="form-control" required=""><br>
				<button type="submit" class="btn btn-success">ADD</button>
			
		</div>
		</form>
	</div></center>
</div>
@endsection