@extends('layouts.bestprices')
@section('content')

<form action="">
       <div class="container-fluid">

                        <div class="row shadow-sm">
                            
                               
                                <div class="col-sm-12 col-md-3 col-lg-3 offset-lg-2 offset-md-1 text-center">
                                        <label for="upload"><img alt="profile picture" class="img-fluid img-circular" id="preview" src="{{url('img/profiles/'.$profile->image)}}" alt="image to upload" /></label>
                                        <input class="form-group" type="file" hidden name="photos" id="upload" onchange="previewExistent(this,'preview')">
                                        <p class="text-center">Toque la Imagen para Cambiar</p>
                                    </div>
                                <div class="col-sm-12 col-md-7 col-lg-6 align-self-center centrado-cel">
                                        <h3>{{$users->username}}@if ($editar) <i class="material-icons">Editar</i> @endIf </h3>
                                        <p class="container-perfil__descripción">
                                            <input class="form-control" type="text" name="description" value="{{$profile->description}}">
                                        </p>
                                </div>
                               
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
                                    
                                  </div>
                                  
                                </div>
                                 
                              </div>
                            </div>
                            <div class="text-center mt-4 mb-4">
                                <a class="btn btn-secondary mr-2" href="/profile/{{$profile->id}}">Cancelar</a>
                                <button class="btn btn-primary mr-2" type="submit">Aceptar</button>
                            </div>
                    </form>
                          
 @endsection
                  
         