@extends('layouts.bestprices')
@section('content')
<!--@inject('controller', 'App\Http\Controllers\ControladorPrincipal')-->

<div class="row shadow-sm">

    <div class="col-12 text-center mt-4 ">
      <h2 class=" color-title titulo">Encuentra lo que buscas, rápido y barato.</h2>
    </div>
    <div class="col-lg-8 col-md-6 col-sm-12 mx-auto mt-5 ">
      <div>
          <form class="input-group mb-3" action="{{route('buscar-producto')}}" method="POST">
            @csrf

            @isset($name)
            <input type="search" class="form-control" name="buscar" placeholder="¿Qué está buscando?" value="{{$name}}" aria-label="buscar">
            @endIsset

            @empty($name)
            <input type="search" class="form-control" name="buscar" placeholder="¿Qué está buscando?" aria-label="buscar">
            @endEmpty

            <button class="btn btn-primary text-white btn-outline-secondary" type="submit"><i class="fas fa-search"></i></button>
        </div>
      </div>
    </div>

  </div>

<div class="row">
    <div class="col-xl-2 offset-xl-1 offset-md-0 offset-lg-0 card form-group mt-5">
                  <div>
                      <label class="mt-2" for="">Categoria</label>
                      <select class="form-control form-control-sm" name="select-category">
                        <option value="">Seleccione una Categoria</option>
                        <!--cargo las categorias mandadas por el metodo del controller principal -->
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach 
                      </select>
                  </div>
            
                  <div>
                    <label class="mt-2" for="">Condicion</label>
                    <select class="form-control form-control-sm" name="select-condition">
                      <option value="">Seleccione una Ubicacion</option> 
                      <option value="nuevo">Nuevo</option>
                      <option value="usado">Usado</option>
                    </select>
                  </div>
            
                  <div>
                    <label class="mt-2" for="">Ubicacion</label>
                    <select class="form-control form-control-sm mb-3" name="ubicacion">
                      <option value="">Seleccione una Ubicacion</option>    
                      <option value="San Jose">San Jose</option>
                      <option value="Heredia">Heredia</option>
                      <option value="Cartago">Cartago</option>
                      <option value="Puntarenas">Puntarenas</option>
                      <option value="Limon">Limon</option>
                      <option value="Guanacaste">Guanacaste</option>
                    </select>
                  </div>
            
                  <div class="text-center">
                    <button type="submit" class="btn btn-secondary mb-2">Aplicar</button>
                  </div>
      </form>

    </div>


    <div class="container container-productos">
            <div class="card-deck">
                    @isset($products)

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
                    @endIsset                  
                                                                                         
                  </div>
    </div>
@endsection