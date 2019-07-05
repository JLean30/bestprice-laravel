@extends('layouts.bestprices')
@section('content')
<!--@inject('controller', 'App\Http\Controllers\ControladorBusqueda')-->
<div class="section-views">
                <div class="row justify-content-center">
                        <h1>{{$titulo}}</h1>
                </div>
                <div class="row justify-content-center">
                        <div class="col-lg-4 col-xs-12 float-right">
                                <div class="select-img">
                                        <p
                                                class="tipoImg bg-dark text-light text-center position-absolute card-tipoProducto ">
                                                {{$condicion}}</p>
                                        
                                      
                                        <img class="img-fluid" id="img" src="/img/products/{{$imagen}}" alt="">
                                       
                                   
                                        
                                            
                                        
                                        <div class="row d-flex justify-content-around">
                                                <ul class="list-inline" id="lista-img">
                                                                @isset($thubnails)
                                                            
                                                               
                                                                @for ($i = 0; $i < count($thubnails); $i++)
                                                               
                                                        <li class="list-inline-item"><img id="{{$i+1}}"
                                                                        class="img-fluid" src={{$thubnails[$i]}}
                                                                        alt="{{$titulo}}" width="100px"></li>
                                                                 @endFor     
                                                        @endIsset
                                                        
                                                </ul>
                                               
                                        </div>
                                </div>


                               
                                
                        
                                <div class="row d-flex flex-column">
                                        <div class="row align-self-center mt-5">
                                                <p class="">Añadido por <a href="/profile/{{$dueno}}"class="text-info">thanos</a></p>
                                        </div>
                                        <div class="row align-self-center mt-5">
                                                <h1 class="text-right text-large text-danger">₡ {{$precio}}</h1>
                                        </div>

                                </div>
                        </div>

                        <div
                                class="col-lg-4 col-xs-12 container-form d-flex justify-content-around flex-column">
                                <h2>Fabricante</h2>
                                <p>{{$fabricante}}</p>
                                <h2>Categoria</h2>
                                <p>{{$categoria}}</p>
                                <h2>Telefono</h2>
                                <p>{{$telefono}}</p>
                                <h2>Tipo</h2>
                                <p>{{$condicion}}</p>
                                <h2>Ubicacion</h2>
                                <p>{{$ubicacion}}</p>
                        </div>
                </div>
                <div class="row justify-content-center">
                        <div class="col-xl-8 align-self-center">
                                <h2>Detalle</h2>
                                 <p>{{$descripcion}}</p>
                                   
                        </div>
                </div>
                <div class="row justify-content-center mt-4">
                        <form action="{{route('registrar-interesado')}}" method="post">
                                @csrf
                                <input hidden name="id_duenno" value="{{$dueno}}">
                                <input hidden name="id_producto" value="{{$id}}">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Me interesa</button>
                        </form>
                        
                </div>

        </div>

       
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
                $(document).ready(function () {
                        $lista = $("body #lista-img").children("li").length;
                        console.log($lista);
        
                        for(var i = 0; i <= $lista; i++){
                                $("#"+i).click(function (event) {
                                ruta= $(this).attr('src');
                                rutaImg= $("#img").attr('src');
                                $("#"+i).attr("src", rutaImg);
                                $("#img").attr("src", ruta);
                                
                                
                        });
                        }
                });
        </script>

@endsection