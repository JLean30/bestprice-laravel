@extends('layouts.bestprices')

@section('content')
<div class="container-fluid">
        <form method="POST" enctype="multipart/form-data" action="{{route('registrar-producto')}}">
            @csrf
            <div class="section-form">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-xs-12 float-right text-center">
                             
                                        <label for="upload"><img class="img-fluid" id="preview" src="img/imagen.png" alt="image to upload" /></label>
                                        <input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">
                                          
                             
                                    <div class="row d-flex justify-content-around">
                                            <ul class="list-inline"
                                            id="imgThubnails-preview">

                                            </ul>
                                    </div>
                            <h3 class="text-left mt-4">Precio</h3>
                            <input class="form-control form-control-lg" type="text">
                        </div>
                        <div class="col-xl-4 col-xs-12 form-group d-flex justify-content-around flex-column">
                            <h3>Titulo</h3>
                            <input class="form-control form-control-lg" type="text">
                            <h3>Fabricante</h3>
                            <input class="form-control form-control-lg" type="text">
                            <h3>Categoria</h3>
                            <select class="custom-select custom-select-lg">
                              <!--cargo las categorias mandadas por el metodo del controller principal -->
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach 
                            </select>
                            <h3>Tipo</h3>
                            <select class="custom-select custom-select-lg">
                                <option value="nuevo">Nuevo</option>
                                <option value="usado">Usado</option>
                            </select>
                            <h3>Telefono</h3>
                            <input class="form-control form-control-lg" type="text">
                            <h3>Ubicacion</h3>
                            <input class="form-control form-control-lg" type="text">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 form-group align-self-center container-form">
                            <h3>Detalle</h3>
                            <input class="form-control form-control-lg" type="text">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary" id="agregar-btn">Agregar el Articulo</button>
                    </div>
                </div>
           
        </form>
        
        
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
       
        $cantImg=0;
        function addInput(){
            $('#upload').attr('id',"upload"+$cantImg);
            $('#imgThubnails-preview').append('<input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">');
        }

        function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            if($('#preview').attr('src') === "img/imagen.png"){
                $('#preview').replaceWith('<img src="'+e.target.result+'" class="img-fluid"/>');
                $('#imgThubnails-preview').append('<label id="label-thubnails" for="upload"><img class="img-fluid" src="img/imagen.png" alt="image to upload" width="100px" /></label> ');
                
                addInput();
                $cantImg++;
                }else{
                    if($cantImg <= 3 ){
                        $('#imgThubnails-preview').prepend('<li class="list-inline-item"><img class="img-fluid" src='+e.target.result+' alt="" width="100px"></li> ');
                        addInput();
                    }
               
                $cantImg++;
                if($cantImg > 3){
                    $('#label-thubnails').remove();
                }
            }
            
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection