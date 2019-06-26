@extends('layouts.bestprices')
@section('section-video')
<div class="col-12 text-center mt-4 "style="position: absolute;z-index: 2;top: 15vw; color: white !important;">
        <h2 class="  titulo">¡Bienvenido a Bestprices! <br>
        <small class="mt-2">Haz tu primera compra</small></h2>
       <a href="./login.html">
        <button class="col-sm-6 mt-2 btn btn-primary btn-header ">Ingresa Aqui</button>
      </a> 
      
      </div>
      <div class="hero-video">
      <video playsinline='playsinline' autoplay='autoplay'  muted='muted' class='w-100' id='video-hero' loop='loop'><source src='./img/video-hero.mp4' type='video/mp4'></video>
      </div>
        @endsection
@section('content')
<div class="container mb-4" style="
width: 80%;">
        <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 col-lg-12 text-center mt-4 mb-3">
              
                  <img src="./img/gtx-2080ti-firssection.jpg" class="w-100 img-fluid z-depth-1" alt="">
              
                </div>
                <!-- Grid column -->
              
              </div>
              <!-- Grid row -->
              
              <!-- Grid row -->
              <div class="row">
              
                <!-- Grid column -->
                <div class="col-lg-6 col-md-6 col-sm-6 mb-3">
              
                  <img src="./img/AMD-Ryzen-3000-Ryzen-3-3200G-APU-1-firstsection best price.jpg" class="img-fluid z-depth-1"
                    alt="Responsive image">
              
                </div>
                <!-- Grid column -->
              
                       <!-- Grid column -->
                <div class="col-lg-6 col-md-6 col-sm-6  mb-3">
              
                  <img src="./img/Intel-processor-firstsection.jpg" class="img-fluid z-depth-1"
                    alt="Responsive image">
              
                </div>
                <!-- Grid column -->
              
              </div>
              <!-- Grid row -->
              

</div>
<div class="container-fluid section-gray pt-4 pb-4">
  <div class="container container-productos "  id="articulos-nuevos">
    <h2 class="text-left mb-3 color-title linea-horizontal">Articulos destacados</h2>
    <div class="card-deck">
        @foreach($products as $product)
        
        <!--inicio card-->
        <div class="card shadow-sm">
            <p class="bg-dark text-light text-center position-absolute card-tipoProducto ">{{$product->condition}}</p>
            @foreach ($product->images->take(1) as $productImage )
          <img class="card-img-top" src="{{url('img/products/'.$productImage->image)}}" alt="Card image cap">
          @endforeach
          <div class="card-body">
            <h5 class="card-title color-title">{{$product->name}}</h5>
            <p class="card-text">
                {{$product->description}}
            </p>
        
                
            
            <p class="card-text"><small class="text-muted">Añadido por <a href="./profile/{{$product->user->id}}" class="text-info">{{$product->user->username}}</a> </small></p>
           
            <p class="card-text text-right color-title">₡{{$product->price}}</p>
            
          </div>
        </div>
        @endforeach
        <!--final card-->
                            
                                                                             
      </div>
            
           
            
                
                </div>
                
              </div>
           
@endsection