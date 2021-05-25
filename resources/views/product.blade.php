@extends('master')
@section('content')
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	@foreach($products as $pro)
    <div class="carousel-item {{$pro['id']==1?'active':''}}">
      <img class="d-block w-100" src="{{$pro['gallery']}}" alt="" height="500px">
      <h3>{{$pro['name']}}</h3>
    </div>
    @endforeach

    <!--<div class="carousel-item active">
      <img class="d-block w-100" src="images/dell.jpg" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/ideapad.jpg" alt="..." height="500px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/dell.jpg" alt="..." height="500px">
    </div>-->

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!---Best selller-->
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
