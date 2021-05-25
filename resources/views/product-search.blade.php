@extends('master')
@section('content')
<div class="container">
<div class="row">
  @foreach($products as $pro)
  <div class="col-md-3">

    <div class="card">
      <img src="{{$pro['gallery']}}" class="img-fluid" style="height: 200px;">
      <div class="card-body">
        <h4 class="card-title">{{$pro['name']}}</h4>
      </div>
      <div class="card-footer">
       <a href="detail/{{$pro['id']}}"><button type="submit" class="btn btn-success">View Detail</button></a>
        <a href=""><button type="submit" class="btn btn-success">Buy Now</button></a>
       </div>
    </div>
  </div>
  @endforeach
 </div>
</div>
@endsection
