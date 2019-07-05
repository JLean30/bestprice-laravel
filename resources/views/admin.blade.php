@extends('layouts.bestprices')
@section('content')


       <div class="container-fluid">

                        <div class="row shadow-sm">
                            
                               
                                <div class="col-sm-12 col-md-3 col-lg-3 offset-lg-2 offset-md-1 text-center">
                                        <img src="{{url('img/profiles/'.$profile->image)}}" alt="profile picture" class=" img-fluid img-circular">
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 align-self-center centrado-cel">
                                        <h3>{{$users->username}} <a class="ml-5" href="/editarPerfil/{{$profile->id}}">@if ($editar) <i class="material-icons">Editar</i> @endIf</a></h3>
                                        <p class="container-perfil__descripción">
                                                {{$profile->description}}
                                        </p>
                                </div>
                                <ul class="nav nav-pills mx-auto " id="pills-tab" role="tablist">
                                  <li class="nav-item mr-4 margenes-phone">
                                    <a class="nav-link active" id="pills-acercaDe-tab" data-toggle="pill" href="#pills-acercaDe" role="tab" aria-controls="pills-acercaDe" aria-selected="true">Acerca De</a>
                                  </li>
                                  <li class="nav-item mr-4 margenes-phone">
                                    <a class="nav-link" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab" aria-controls="pills-productos" aria-selected="false">Productos Pendientes</a>
                                  </li>
                                  @if ($editar)
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-comentarios-tab" data-toggle="pill" href="#pills-comentarios" role="tab" aria-controls="pills-comentarios" aria-selected="false">Interesados</a>
                                  </li>
                                  @endIf
                                </ul>
                               
                        </div>
                      </div>
                 
                      <div class="container-fluid section-gray pb-5">
                        <div class="row">
                          <div class="col-sm-12  col-lg-8 bg-white shadow-sm p-4 mx-auto mt-4">
                                <div class="tab-content " id="pills-tabContent">
                                  <div class="tab-pane fade show active ml-2" id="pills-acercaDe" role="tabpanel" aria-labelledby="pills-acercaDe-tab">
          
                                      <h3 class="color-title linea-horizontal tamanno-title__cel">Nombre Completo</h3>
                                      <p>{{$users->name." ".$users->lastName}}.</p>
                                      <h3 class="color-title linea-horizontal tamanno-title__cel mt-4">Ubicación</h3>
                                      <p>{{$users->location}}.</p>
                                      <h3 class="color-title linea-horizontal tamanno-title__cel mt-4">Contacto</h3>
                                      <p> Telefono: {{$users->phone}} <br>
                                              Email: {{$users->email}}<br>
                                             
                                      </p>
                                   
                                   
                                  </div>

                                  <div class="tab-pane fade" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">                                     
                                      <div class="container container-productos " >
                                          
                                      <div class="card-deck">
                                          @foreach($products as $product)
                                          @foreach ($product->images->take(1) as $productImage )
                                          <!--inicio card-->
                                          <div class="card shadow-sm">
                                              <p class="bg-dark text-light text-center position-absolute card-tipoProducto ">{{$product->condition}}</p>
                                            <img class="card-img-top" src="{{url('img/products/'.$productImage->image)}}" alt="Card image cap">
                                            @endforeach
                                            <div class="card-body">
                                              <h5 class="card-title color-title">{{$product->name}}</h5>
                                              <p class="card-text">
                                                  {{$product->description}}
                                              </p>
                                              <p class="card-text text-right color-title">₡{{$product->price}}</p>

                                              <form action="">
                                                  <a class="btn btn-danger" href="">Denegar</a>
                                                  <a class="btn btn-primary" href="">Aprobar</a>
                                              </form>
                                              
                                            </div>
                                          </div>
                                          @endforeach
                                          <!--final card-->
                                                              
                                                                                                               
                                        </div>
                                      </div>
                                           </div>
                                           
                                          </div>
                                    
                                  </div>
                                  
                                </div>
                                 
                              </div>
                            </div>
                          
 @endsection
                  
         