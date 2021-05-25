@extends('master')
@section('content')
<div class="container">
	<table class="table table-hover">
		<tr><th>ID</th><th>Image</th><th>Name</th><th>Price</th><th>Action</th></tr>

		@foreach($products as $pro)
		<tr>
			<td>{{$pro->id}}</td>
			<td><img src="{{$pro->gallery}}" class="img-fluid" height="10px" width="50px"></td>
			<td>{{$pro->name}}</td>
			
			<td>{{$pro->price}}</td>
			<td><a href="{{"clearorder/".$pro->id}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
	<!--<a href="/ordernow" class="btn btn-success">CheckOut</a>-->
</div>
@endsection