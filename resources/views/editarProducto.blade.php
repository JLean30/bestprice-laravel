@extends('layouts.bestprices')

@section('content')

            <div class="section-form">
                    <form class="needs-validation" method="POST" id="form-edit" enctype="multipart/form-data" action="{{route('editar-producto')}}" novalidate>
                        @csrf
                    <div class="row justify-content-center">
                        
                        <div class="col-xl-4 col-xs-12 float-right text-center">
                             <img class="img-fluid" id="preview" src="/img/products/{{$imagen}}" alt="image to upload" />
                                  
                                <div class="row d-flex justify-content-around">
                                        <ul class="list-inline" id="imgThubnails-preview">
                                                        @isset($thubnails)
                                                        @for ($i = 0; $i < count($thubnails); $i++)
                                                        <label for="upload{{$i}}"><li class="list-inline-item"><img class="img-fluid" id="{{$i}}" src={{$thubnails[$i]}} alt="image to upload" width="100px" /></li></label>
                                                        <input type="file" hidden name="photo{{$i}}"  id="upload{{$i}}" onchange="previewExistent(this,{{$i}})">   
                                                         @endFor     
                                                @endIsset
                                                
                                        </ul>
                                </div> 
                                @foreach($products as $product)
                                <input class="form-control form-control-lg" hidden type="text" name="id" value="{{$product->id}}" required>
                            <h3 class="text-left mt-4">Precio</h3>
                            <input class="form-control form-control-lg validar @error('precio') is-invalid @enderror" type="text" name="precio" value="{{$product->price}}" required>
                            <div class="invalid-feedback">Inserte el Precio del Articulo</div>
                            @error('precio')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg @error('titulo') is-invalid @enderror" name="titulo" type="text" value="{{$product->name}}" required>
                            <div class="invalid-feedback">Inserte el Titulo del Articulo</div>
                            @error('titulo')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg @error('fabricante') is-invalid @enderror" name="fabricante" type="text" value="{{$product->maker}}" required>
                            <div class="invalid-feedback">Inserte el Fabricante del Articulo</div>
                            @error('fabricante')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg @error('select.category') is-invalid @enderror" name="select-category" required>
                              <!--cargo las categorias mandadas por el metodo del controller principal -->
                              @foreach($categories as $category)
                              @if($product->category_id === $category->id)
                              <option value="{{$category->id}}" selected>{{$category->name}}</option>
                              @else
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endif
                             
                              @endforeach 
                            </select>
                            <div class="invalid-feedback">Inserte el Categoria del Articulo</div>
                            @error('select-category')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Tipo</h3>
                            <select class="custom-select custom-select-lg @error('select-condition') is-invalid @enderror" name="select-condition" required>
                                @if($product->condition === "nuevo")
                                <option value="nuevo" selected>Nuevo</option>
                                <option value="usado">Usado</option>
                                @else
                                <option value="nuevo" >Nuevo</option>
                                <option value="usado" selected>Usado</option>
                                @endif
                            </select>
                            <div class="invalid-feedback">Inserte la Condicion del Articulo</div>
                            @error('select-condition')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg validar @error('telefono') is-invalid @enderror" name="telefono" type="text" value="{{$product->phone}}" required>
                            <div class="invalid-feedback">Inserte el Telefono del Articulo</div>
                            @error('telefono')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <h3>Ubicacion</h3>
                            <input class="form-control form-control-lg @error('ubicacion') is-invalid @enderror" name="ubicacion" type="text"value="{{$product->location}}" required>
                            <div class="invalid-feedback">Inserte la Ubicacion del Articulo</div>
                            @error('ubicacion')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 form-group align-self-center container-form">
                            <h3>Detalle</h3>
                            <input class="form-control form-control-lg @error('detalle') is-invalid @enderror" type="text" name="detalle" value="{{$product->description}}" required>
                            <div class="invalid-feedback">Inserte el Detalle del Articulo</div>
                            @error('detalle')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
         
                    @endforeach
                    <div class="row justify-content-center">
                        <button id="edit" class="btn btn-primary" id="agregar-btn">Actualizar Producto</button>
                    </div>
                </div>

           
        </form>
        
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/js/anadirProducto.js"></script>
    <script>
    
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#edit').click(function(){
          alert("pulsando");
         
         
          $hola= "no ";
          $('#form-edit').append($hola);
        $.ajax({
        url: '127.0.0.1:3000/editar-producto' ,
        type: "POST",
        data: $('#form-edit').serialize(),
        success: function( response ) {
           
        }
      });
      })
     </script>
    <script src="/js/anadirProducto.js"></script>
@endsection