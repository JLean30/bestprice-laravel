@extends('layouts.bestprices')

@section('content')

            <div class="section-form">
                    <form class="needs-validation" method="POST" enctype="multipart/form-data" action="{{route('registrar-producto')}}" novalidate>
                        @csrf
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-xs-12 float-right text-center">
                             
                                        <label for="upload"><img class="img-fluid" id="preview" src="/img/imagen.png" alt="image to upload" /></label>
                                        <input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)" required>
                                        <div class="invalid-feedback">Seleccione una Imagen</div>
                                          
                             
                                    <div class="row d-flex justify-content-around">
                                            <ul class="list-inline"
                                            id="imgThubnails-preview">

                                            </ul>
                                    </div>
                        
                            <h3 class="text-left mt-4" for="precio">Precio</h3>
                            <input class="form-control form-control-lg mt-2 validar" type="text" name="precio" required>
                            <div class="invalid-feedback">Inserte el Precio del Articulo</div>
                        </div>

                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg mt-2" name="titulo" type="text" required>
                            <div class="invalid-feedback">Inserte el Titulo del Articulo</div>
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg mt-2" name="fabricante" type="text" required>
                            <div class="invalid-feedback">Inserte el Fabricante del Articulo</div>
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg" name="select-category" required>
                                <option value="">Seleccione una Categoria</option>
                              <!--cargo las categorias mandadas por el metodo del controller principal -->
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach 
                            </select>
                            <div class="invalid-feedback">Seleccione una Categoria para su Articulo</div>
                            <h3>Condicion</h3>
                            <select class="custom-select custom-select-lg" name="select-condition" required>
                                <option value="">Seleccione una Condicion</option>
                                <option value="Articulo Nuevo">Nuevo</option>
                                <option value="Articulo Usado">Usado</option>
                            </select>
                            <div class="invalid-feedback">Seleccione una Condicion de su Articulo</div>
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg mt-2 validar" name="telefono" type="text" required>
                            <div class="invalid-feedback">Inserte el Telefono al que desea ser Contactado</div>
                            <h3>Ubicacion</h3>
                            <select class="custom-select custom-select-lg" name="ubicacion" required>
                                    <option value="San Jose">San Jose</option>
                                    <option value="Heredia">Heredia</option>
                                    <option value="Cartago">Cartago</option>
                                    <option value="Puntarenas">Puntarenas</option>
                                    <option value="Limon">Limon</option>
                                    <option value="Guanacaste">Guanacaste</option>
                                  </select>
                            <div class="invalid-feedback">Inserte la Ubicacion del Articulo</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 form-group align-self-center container-form">
                            <h3>Detalle</h3>
                            <input class="form-control form-control-lg mt-2" type="text" name="detalle" required>
                            <div class="invalid-feedback">Inserte el Detalle del Articulo</div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Agregar el Articulo</button>
                    </div>
                </div>
           
        </form>
        
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/anadirProducto.js"></script>
@endsection