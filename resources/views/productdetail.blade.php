@extends('master')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<img  src="{{$product['gallery']}}" class="img-fluid">
		</div>
		<div class="col-sm-6">
			<a href="/product">Back To Shopping</a>
			<h2>Name:{{$product['name']}}</h2>
			<h3>Price:{{$product['price']}}</h3>
			<h3>Category:{{$product['category']}}</h3>
			<h3>Desc:{{$product['description']}}</h3>
			<form action="/addtocart" method="post">
				@csrf
				<input type="hidden" name="product_id" value="{{$product['id']}}">
			<button class="btn btn-info">Add To Cart</button>
			</form>
			<br><br>
			<button class="btn btn-primary">Buy Now</button>
		</div>
	</div>
</div>
@endsection
