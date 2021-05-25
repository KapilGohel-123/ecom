<?php
use App\Http\Controllers\productcontroller;
$total=0;
if (Session::has('user')) {
  $total = productcontroller::carttime();
}
?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/product">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/product">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
      @if(Session::has('user'))
      <li class="nav-item">
        <a class="nav-link" href="/myorder">My Order</a>
      </li>
      @endif
    </ul>
    <form class="form-inline my-2 my-lg-0" action="/search">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
    <li class="nav-item">
      @if($total>0)
        <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
        @else
        <a class="nav-link" href="">Cart({{$total}})</a>
        @endif
      </li>
      @if(Session::has('user'))
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Hello:{{ session('user')->name }}<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href=""></a>logout</li>
        </ul>
      </li>
      @else
      <li><a href="/login">Login</a></li>
       <li><a href="/signup">Signup</a></li>
    @endif


  </div>
</nav>
