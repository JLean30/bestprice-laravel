@extends('layouts.bestprices')
@section('content')
<<<<<<< HEAD
<!--@inject('controller', 'App\Http\Controllers\ControladorPrincipal')-->
=======
<!--@inject('controller', 'App\Http\Controllers\ControladorBusqueda')-->
>>>>>>> test
<div class="section-views">
                <div class="row justify-content-center">
                        <h1>{{$titulo}}</h1>
                </div>
                <div class="row justify-content-center">
                        <div class="col-lg-4 col-xs-12 float-right">
                                <div class="select-img">
<<<<<<< HEAD
                                        <p
                                                class="tipoImg bg-dark text-light text-center position-absolute card-tipoProducto ">
                                                {{$condicion}}</p>
                                        
                                      
                                        <img class="img-fluid" id="img" src="/img/products/{{$imagen}}" alt="">
                                       
                                   
                                        
                                            
                                        
=======
                                        <p class="tipoImg bg-dark text-light text-center position-absolute card-tipoProducto ">{{$condicion}}</p>
                                        
                                        <img class="img-fluid" id="img" src="/img/products/{{$imagen}}" alt="">
                                       
>>>>>>> test
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

<<<<<<< HEAD

                               
                                
                        
                                <div class="row d-flex flex-column">
                                        <div class="row align-self-center mt-5">
                                                <p class="">Añadido por <a href="/profile/{{$dueno}}"class="text-info">thanos</a></p>
=======
                                <div class="row d-flex flex-column">
                                        <div class="row align-self-center mt-5">
                                                <p class="">Añadido por <a href="/profile/{{$idDuenno}}"class="text-info">{{$nombreDuenno}}</a></p>
>>>>>>> test
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
<<<<<<< HEAD
                        <button type="button" class="btn btn-primary" id="agregar-btn">Contactar Vendedor</button>
=======
                        @if (!$interes)
                        <form action="{{route('registrar-interesado')}}" method="post">
                                @csrf
                                <input hidden name="id_duenno" value="{{$idDuenno}}">
                                <input hidden name="id_producto" value="{{$id}}">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Me interesa</button>
                        </form>
                        @else
                        <button type="button" disabled class="btn btn-primary disabled" id="agregar-btn">Me interesa</button>
                        @endif
                        
                </div>
                <div class="text-center mt-4 mb-4">
                                @if ($duennoProducto)
                        <a class="btn btn-danger mr-2" href="/eliminar-producto/{{$id}}">Eliminar</a>
                        <a class="btn btn-primary ml-2" href="/editar-producto/{{$id}}">Editar</a>
                        @endif
>>>>>>> test
                </div>

        </div>

       
                
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<<<<<<< HEAD
<script>
        $(document).ready(function () {
                $lista = $("body #lista-img").children("li").length;
                console.log($lista);

                for(var i = 1; i <= $lista; i++){
                        $("#"+i).click(function (event) {
                        ruta= $(this).attr('src');
                        $("#img").attr("src", ruta);
                        
                });
                }
        });
</script>
=======
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
>>>>>>> test

@endsection