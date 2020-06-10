@extends('layouts.bestprices')

@section('content')
<div class="container-fluid">
        <form method="POST" enctype="multipart/form-data" action="{{route('registrar-producto')}}">
                @csrf
                <div class="section-form">
                        <div class="row justify-content-center">
                                <div class="col-xl-4 col-xs-12 float-right text-center">
                                        <img class="img-fluid" id="preview" src="img/imagen (1).png" alt="image to upload"/>
                                        <div class="custom-file mt-4">
                                                <input type="file" name="photo" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Seleccionar Imagen</label>
                                        </div>
                                </div>
                                <div
                                        class="col-xl-4 col-xs-12 form-group d-flex justify-content-right flex-column">
                                        <h3>Titulo</h3>
                                        <input class="form-control form-control-lg" name="titulo" type="text">
                                        <h3>Fabricante</h3>
                                        <input class="form-control form-control-lg" name="fabricante" type="text">
                                        <h3>Categoria</h3>
                                        <select class="custom-select custom-select-lg" name="select-category">
                                       <!--cargo las categorias mandadas por el metodo del controller principal -->
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach   
                                        </select>
                                        <h3>Telefono</h3>
                                        <input class="form-control form-control-lg" name="telefono" type="text">
                                        <h3>Ubicacion</h3>
                                        <input class="form-control form-control-lg" name="ubicacion" type="text">
                                        <h3>estado</h3>
                                        <select class="custom-select custom-select-lg" name="select-condition">
                                                <option value="SegundaMano">Segunda Mano</option>
                                                <option value="Nuevo">Nuevo</option>
                                        </select>
                                        <h3>cantidad</h3>
                                        <input class="form-control form-control-lg" name="cantidad" type="text">
                                </div>
                        </div>
                        <div class="row justify-content-center">
                                <div class="col-xl-8 form-group align-self-center container-form">
                                        <h3>Detalle</h3>
                                        <input class="form-control form-control-lg" name="detalle" type="text">
                                </div>
                        </div>
                        <div class="row justify-content-center">
                                <button type="submit" class="btn btn-primary" id="agregar-btn">Agregar
                                        el
                                        Articulo</button>
                        </div>
                </div>
        </form>

</div>
@endsection