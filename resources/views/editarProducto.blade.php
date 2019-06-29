@extends('layouts.bestprices')

@section('content')

            <div class="section-form">
                    <form method="POST" enctype="multipart/form-data" action="{{route('editar-producto')}}">
                        @csrf
                    <div class="row justify-content-center">
                        
                        <div class="col-xl-4 col-xs-12 float-right text-center">
                                <label for="upload"><img class="img-fluid" id="preview" src="/img/products/{{$imagen}}" alt="image to upload" /></label>
                                <input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">    
                                <div class="row d-flex justify-content-around">
                                        <ul class="list-inline" id="imgThubnails-preview">
                                                        @isset($thubnails)
                                                        @for ($i = 0; $i < count($thubnails); $i++)
                                                        <label for="upload{{$i+1}}"><li class="list-inline-item"><img class="img-fluid" id="{{$i+1}}" src={{$thubnails[$i]}} alt="image to upload" width="100px" /></li></label>
                                                        <input type="file" hidden name="photos[]"  id="upload{{$i+1}}" onchange="previewExistent(this,{{$i+1}})">   
                                                         @endFor     
                                                @endIsset
                                                
                                        </ul>
                                </div> 
                                @foreach($products as $product)
                                <input class="form-control form-control-lg" hidden type="text" name="id" value="{{$product->id}}">
                            <h3 class="text-left mt-4">Precio</h3>
                            <input class="form-control form-control-lg" type="text" name="precio" value="{{$product->price}}">
                        </div>
                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg" name="titulo" type="text" value="{{$product->name}}">
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg" name="fabricante" type="text" value="{{$product->maker}}">
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg" name="select-category">
                              <!--cargo las categorias mandadas por el metodo del controller principal -->
                              @foreach($categories as $category)
                              @if($product->category_id === $category->id)
                              <option value="{{$category->id}}" selected>{{$category->name}}</option>
                              @else
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endif
                             
                              @endforeach 
                            </select>
                            <h3>Tipo</h3>
                            <select class="custom-select custom-select-lg" name="select-condition" >
                                @if($product->condition === "nuevo")
                                <option value="nuevo" selected>Nuevo</option>
                                <option value="usado">Usado</option>
                                @else
                                <option value="nuevo" >Nuevo</option>
                                <option value="usado" selected>Usado</option>
                                @endif
                            </select>
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg" name="telefono" type="text" value="{{$product->phone}}">
                            <h3>Ubicacion</h3>
                            <input class="form-control form-control-lg" name="ubicacion" type="text"value="{{$product->location}}">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 form-group align-self-center container-form">
                            <h3>Detalle</h3>
                            <input class="form-control form-control-lg" type="text" name="detalle" value="{{$product->description}}">
                        </div>
                    </div>
         
                    @endforeach
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Actualizar Producto</button>
                    </div>
                </div>

           
        </form>
        
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/anadirProducto.js"></script>
@endsection