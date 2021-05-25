@extends('master')
@section('content')
<div class="container">
	<table class="table table-hover">
		<tr><th>ID</th><th>Name</th><th>Image</th><th>Price</th><th>Delete</th></tr>

		@foreach($products as $pro)
		<tr>
			<td>{{$pro->id}}</td>
			<td>{{$pro->name}}</td>
			<td><img src="{{$pro->gallery}}" class="img-fluid" height="10px" width="50px"></td>
			<td>{{$pro->price}}</td>
			<td><a href="{{"cartdelete/".$pro->id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
	<a href="/ordernow" class="btn btn-success">CheckOut</a>
</div>
@endsection