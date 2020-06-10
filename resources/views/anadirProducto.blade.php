@extends('layouts.bestprices')

@section('content')

            <div class="section-form">
<<<<<<< HEAD
                    <form method="POST" enctype="multipart/form-data" action="{{route('registrar-producto')}}">
=======
                    <form class="needs-validation" method="POST" enctype="multipart/form-data" action="{{route('registrar-producto')}}" novalidate>
>>>>>>> test
                        @csrf
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-xs-12 float-right text-center">
                             
<<<<<<< HEAD
                                        <label for="upload"><img class="img-fluid" id="preview" src="img/imagen.png" alt="image to upload" /></label>
                                        <input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">
=======
                                        <label for="upload"><img class="img-fluid" id="preview" src="/img/imagen.png" alt="image to upload" /></label>
                                        <input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)" required>
                                        <div class="invalid-feedback">Seleccione una Imagen</div>
>>>>>>> test
                                          
                             
                                    <div class="row d-flex justify-content-around">
                                            <ul class="list-inline"
                                            id="imgThubnails-preview">

                                            </ul>
                                    </div>
                        
<<<<<<< HEAD
                            <h3 class="text-left mt-4">Precio</h3>
                            <input class="form-control form-control-lg" type="text" name="precio">
                        </div>
                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg" name="titulo" type="text">
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg" name="fabricante" type="text">
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg" name="select-category">
=======
                            <h3 class="text-left mt-4" for="precio">Precio</h3>
                            <input class="form-control form-control-lg mt-2 validar @error('precio') is-invalid @enderror" type="text" name="precio" value="{{ old('precio') }}" required>
                            <div class="invalid-feedback">Inserte el Precio del Articulo</div>
                            @error('precio')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg mt-2 @error('titulo') is-invalid @enderror" name="titulo" value="{{ old('titulo') }}" type="text" required>
                            <div class="invalid-feedback">Inserte el Titulo del Articulo</div>
                            @error('titulo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg mt-2 @error('fabricante') is-invalid @enderror" name="fabricante" value="{{ old('fabricante') }}" type="text" required>
                            <div class="invalid-feedback">Inserte el Fabricante del Articulo</div>
                            @error('fabricante')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg @error('select-category') is-invalid @enderror" name="select-category" value="{{ old('select-category') }}" required>
                                <option value="">Seleccione una Categoria</option>
>>>>>>> test
                              <!--cargo las categorias mandadas por el metodo del controller principal -->
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach 
                            </select>
<<<<<<< HEAD
                            <h3>Tipo</h3>
                            <select class="custom-select custom-select-lg" name="select-condition">
                                <option value="nuevo">Nuevo</option>
                                <option value="usado">Usado</option>
                            </select>
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg" name="telefono" type="text">
                            <h3>Ubicacion</h3>
                            <input class="form-control form-control-lg" name="ubicacion" type="text">
=======
                            <div class="invalid-feedback">Seleccione una Categoria para su Articulo</div>
                            @error('select-category')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Condicion</h3>
                            <select class="custom-select custom-select-lg @error('select-condition') is-invalid @enderror" name="select-condition" value="{{ old('select-condition') }}" required>
                                <option value="">Seleccione una Condicion</option>
                                <option value="Articulo Nuevo">Nuevo</option>
                                <option value="Articulo Usado">Usado</option>
                            </select>
                            <div class="invalid-feedback">Seleccione una Condicion de su Articulo</div>
                            @error('select-condition')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg mt-2 validar @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" type="text" required>
                            <div class="invalid-feedback">Inserte el Telefono al que desea ser Contactado</div>
                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Ubicacion</h3>
                            <select class="custom-select custom-select-lg @error('ubicacion') is-invalid @enderror" name="ubicacion" value="{{ old('ubicacion') }}" required>
                                <option value="">Seleccione una Ubicacion</option>    
                                <option value="San Jose">San Jose</option>
                                <option value="Heredia">Heredia</option>
                                <option value="Cartago">Cartago</option>
                                <option value="Puntarenas">Puntarenas</option>
                                <option value="Limon">Limon</option>
                                <option value="Guanacaste">Guanacaste</option>
                              </select>
                            <div class="invalid-feedback">Seleccione una Ubicacion del Articulo</div>
                            @error('ubicacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
>>>>>>> test
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 form-group align-self-center container-form">
                            <h3>Detalle</h3>
<<<<<<< HEAD
                            <input class="form-control form-control-lg" type="text" name="detalle">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Agregar el Articulo</button>
=======
                            <input class="form-control form-control-lg mt-2 @error('detalle') is-invalid @enderror" type="text" name="detalle" value="{{ old('detalle') }}" required>
                            <div class="invalid-feedback">Inserte el Detalle del Articulo</div>
                            @error('detalle')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <a class="btn btn-danger mr-2" href="/">Cancelar el Articulo</a>
                        <button type="submit" class="btn btn-primary ml-2" id="agregar-btn">Agregar el Articulo</button>
>>>>>>> test
                    </div>
                </div>
           
        </form>
        
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/anadirProducto.js"></script>
@endsection