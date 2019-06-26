@extends('layouts.bestprices')
@section('content')


       <div class="container-fluid">

                        <div class="row shadow-sm">
                                
                                <div class="col-sm-12 col-md-3 col-lg-3 offset-lg-2 offset-md-1 text-center">
                                        <img src="{{url('img/profiles/'.$imagen)}}" alt="profile picture" class=" img-fluid img-circular">
                                </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 align-self-center centrado-cel">
                                        <h3>{{$usuario}} <a role="button" href="./messages.html"><i class="material-icons">message</i></a> @if ($editar) <i class="material-icons">Editar</i> @endIf </h3>
                                        <p class="container-perfil__descripción">
                                                {{$descripcion}}
                                        </p>
                                </div>
                                <ul class="nav nav-pills mx-auto " id="pills-tab" role="tablist">
                                  <li class="nav-item mr-4 margenes-phone">
                                    <a class="nav-link active" id="pills-acercaDe-tab" data-toggle="pill" href="#pills-acercaDe" role="tab" aria-controls="pills-acercaDe" aria-selected="true">Acerca De</a>
                                  </li>
                                  <li class="nav-item mr-4 margenes-phone">
                                    <a class="nav-link" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab" aria-controls="pills-productos" aria-selected="false">Productos</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="pills-comentarios-tab" data-toggle="pill" href="#pills-comentarios" role="tab" aria-controls="pills-comentarios" aria-selected="false">Comentarios</a>
                                  </li>
                                </ul>
                               
                        </div>
                      </div>
                 
                      <div class="container-fluid section-gray">
                        <div class="row">
                          <div class="col-sm-12  col-lg-8 bg-white shadow-sm p-4 mx-auto mt-4">
                                <div class="tab-content " id="pills-tabContent">
                                  <div class="tab-pane fade show active ml-2" id="pills-acercaDe" role="tabpanel" aria-labelledby="pills-acercaDe-tab">
          
                                      <h3 class="color-title linea-horizontal tamanno-title__cel">Nombre Completo</h3>
                                      <p>{{$nombreCompleto}}.</p>
                                      <h3 class="color-title linea-horizontal tamanno-title__cel mt-4">Ubicación</h3>
                                      <p>{{$ubicacion}}.</p>
                                      <h3 class="color-title linea-horizontal tamanno-title__cel mt-4">Contacto</h3>
                                      <p> Telefono: {{$telefono}} <br>
                                              Email: {{$email}}<br>
                                             
                                      </p>
                                  </div>
                                  <div class="tab-pane fade" id="pills-productos" role="tabpanel" aria-labelledby="pills-productos-tab">
                                      <h3 class="color-title linea-horizontal tamanno-title__cel">Articulos en venta</h3>
                                     
                                      @foreach($productos->products as $products_user)
                                      <div class="card-deck">
                                        <div class="card">
                                            <p class="bg-dark text-light position-absolute card-tipoProducto ">{{$products_user->condition}}</p>
                                          <img class="card-img-top" src="{{url('img/products/'.$imagen)}}" alt="{{$products_user->name}}">
                                          <div class="card-body">
                                            <h5 class="card-title color-title">{{$products_user->name}}</h5>
                                            <p class="card-text">
                                              {{$products_user->descripcion}}
                                            </p>
                                            <p class="card-text"><small class="text-muted">Añadido por <a href="./profile.html" class="text-info">thanos</a> </small></p>
                                            <p class="card-text"><small class="text-primary">₡{{$products_user->price}}</small></p>
                                            
                                          </div>
                                        </div>
                                        
                                        @endforeach
                                      
                                          
                                        </div>
                                           </div>
                                           <div class="tab-pane fade" id="pills-comentarios" role="tabpanel" aria-labelledby="pills-comentarios-tab">
                                            <p class="text-center text-muted mt-5">No hay comentarios en para este usuario</p>
                                          </div>
                                    
                                  </div>
                                  
                                </div>
                                 
                              </div>
                            </div>
                          
 @endsection
                  
         