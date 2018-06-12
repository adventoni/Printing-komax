@extends('layouts.master')

@section('content')

<!-- Card Wider -->
<div class="card card-cascade wider">
    <div class="row">
    <div class="col-sm-3" >
    </div>
    <div class="col-sm-6" >
      <!-- Card Regular -->
      <div class="card card-cascade">
      
        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
      
          <!-- Title -->
          <h4 class="card-title"><strong>{{ Auth::user()->username }}</strong></h4>
          <!-- Subtitle -->
          <h6 class="font-weight-bold indigo-text py-2">Web developer</h6>
          <!-- Text -->
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus, ex, recusandae. Facere modi sunt, quod quibusdam.
          </p>
      
          <!-- Facebook -->
          <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"></i></a>
          <!-- Twitter -->
          <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"></i></a>
          <!-- Google + -->
          <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>
      
        </div>
      </div>
      <div class="col-sm-3" >
      </div>
    </div>
  </div>
      <!-- Card Regular -->
@endsection 