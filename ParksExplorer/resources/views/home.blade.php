@extends('layout.app')

@section('content_gen')

<div class="container-fluid">
    <div class="row">
    <div class="col">
        <div class="jumbotron">
          <h1 class="display-4">Discover the fun for real</h1>
          <p class="lead">Welcome to our amusement park directory! Our website is your go-to source for information on the best amusement parks around the world. Whether you're a thrill-seeker looking for the latest roller coasters or a family searching for a fun day out, we've got you covered.Our comprehensive directory includes detailed information on each amusement park. </p>   
      </div>
    </div>  
    </div>
    <script src="animationHome.js"></script>
      <div class="row">
       <div class="col" id="home_image_position">
          <div>
            <img src="https://cdn1.parksmedia.wdprapps.disney.com/resize/mwImage/1/433/433/75/dam/wdpro-assets/home/hpr/destination/happily-ever-after-blue-1x1.jpg" class="img-fluid" alt="Responsive image" id="home_image">
          </div>
        </div>
        <div class="col">
          <h5 id="nameOfPark"></h5>
          <br>
          <br>
          <h5 id="locationOfPark"></h5>
        </div>
      </div>
</div>
@endsection