@extends('master')
@section('content')
<div class="container">
<table class="table table-striped">
	<tr>
		<td>Price</td>
		<td>{{$total}}</td>
	</tr>
	<tr>
		<td>Delivery charge</td>
		<td>100</td>
	</tr>
	<tr>
		<td>Total Amount</td>
		<td>{{$total + 100}}</td>
	</tr>
	
</table>
<form class="form inline" action="/placeorder" method="post">
	<div class="form-group">
		@csrf
<textarea name="address" rows="3" cols="20" class="form-control" required=""></textarea>
</div>
<h3>Payment Method:</h3>
<input type="radio" name="payment" value="online"> Online  <input type="radio" name="payment" value="cash">  Cash <input type="radio" name="payment" value="UPI">UPI
<br><br><br>
<button type="submit" class="btn btn-success">Place Order</button>

</form>
@endsection
</div>