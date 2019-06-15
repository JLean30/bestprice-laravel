@extends('layouts.bestprices')
@section('content')
<!--@inject('controller', 'App\Http\Controllers\ControladorPrincipal')-->
        <div class="container-fluid">
        
                <div class="section-views shadow-sm mt-3">
                                <div class="row justify-content-center">
                                        <div class="col-xl-4 col-xs-12 float-right">
                                                <div class="select-img">
                                                        <img class="img-fluid" id="img" src="{{url('img/products/'.$imagen)}}" alt="{{$titulo}}">
                                                     
                                                </div>            
                                                </div>
                                        </div>
                                        <div
                                                class="col-xl-4 col-xs-12 container-form d-flex justify-content-right flex-column">
                                                
                                                <h1>{{$titulo}}</h1>
                                                <h3>Fabricante</h3>
                                                <p>{{$fabricante}}</p>
                                                <h3>Categoria</h3>
                                                <p>{{$categoria}}</p>
                                                <h3>Telefono</h3>
                                                <p>{{$telefono}}</p>
                                                <h3>Ubicacion</h3>
                                                <p>{{$ubicacion}}</p>
                                        </div>
                                </div>
                                <div class="row justify-content-center">
                                        <div class="col-xl-8 align-self-center">
                                                <h3>Detalle</h3>
                                                <ul>
                                                        <li>
                                                                <p>{{$descripcion}}</p>
                                                        </li>
                                                       
                                                </ul>
                                        </div>
                                </div>

        </div>

       
                
       
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
        $(document).ready(function () {
                $("#1").click(function (event) {
                        event.preventDefault();
                        var next_imagen = "img/msi.png";
                        $("#img").attr("src", next_imagen);
                });
                $("#2").click(function (event) {
                        event.preventDefault();
                        var next_imagen = "img/msi2.png";
                        $("#img").attr("src", next_imagen);
                });
                $("#3").click(function (event) {
                        event.preventDefault();
                        var next_imagen = "img/msi3.png";
                        $("#img").attr("src", next_imagen);
                });
                $("#4").click(function (event) {
                        event.preventDefault();
                        var next_imagen = "img/msi4.png";
                        $("#img").attr("src", next_imagen);
                });
                $("#5").click(function (event) {
                        event.preventDefault();
                        var next_imagen = "img/msi5.png";
                        $("#img").attr("src", next_imagen);
                });
        });
</script>

@endsection