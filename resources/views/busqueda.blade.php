@extends('layouts.bestprices')
@section('content')
<!--@inject('controller', 'App\Http\Controllers\ControladorPrincipal')-->

<div class="row shadow-sm">

    <div class="col-12 text-center mt-4 ">
      <h2 class=" color-title titulo">Encuentra lo que buscas, rápido y barato.</h2>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12 mx-auto mt-5 ">
      <div class="input-group mb-3">
          <form action="{{route('buscar-producto')}}" method="GET">
            <input type="search" class="form-control" name="search" placeholder="¿Qué está buscando?" aria-label="buscar">
            <div class="input-group-append">
            <button class="btn btn-primary text-white btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>

  </div>

<div class="row">
    <div class="col-xl-2 offset-xl-1 offset-md-0 offset-lg-0 card form-group mt-5">

      <div>
        <label class="mt-3" for="">Marca</label>
        <select class="form-control form-control-sm">
          <option value="asus">NVIDIA</option>
          <option value="msi">AMD</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Fabricante</label>
        <select class="form-control form-control-sm">
          <option value="asus">Asus</option>
          <option value="msi">MSI</option>
          <option value="gigabyte">Gigabyte</option>
          <option value="asrock">ASRock</option>
          <option value="shapirre">Shappire</option>
          <option value="evga">EVGA</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Precios</label>
        <input class="form-control" type="range" list="tickmarks">
        <datalist id="tickmarks">
          <option value="10000">
          <option value="50000">
          <option value="100000">
          <option value="500000">
          <option value="1000000">
        </datalist>
      </div>

      <div>
        <label for="">Estado</label>
        <select class="form-control form-control-sm">
          <option value="nuevo">Nuevo</option>
          <option value="usado">Usado</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Ubicacion</label>
        <select class="form-control form-control-sm mb-3">
          <option value="sanJose">San Jose</option>
          <option value="heredia">Heredia</option>
          <option value="cartago">Cartago</option>
          <option value="puntarenas">Puntarenas</option>
          <option value="limon">Limon</option>
          <option value="guanacaste">Guanacaste</option>
        </select>
      </div>

      <div>
        <button></button>
      </div>

    </div>


    <div class="container container-productos">
            <div class="card-deck">
                    @foreach($products as $product)
                    
                    <!--inicio card-->
                    <a href="/producto/{{$product->id}}">
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
                  </a>
                    @endforeach
                    <!--final card-->
                                        
                                                                                         
                  </div>
    </div>
@endsection