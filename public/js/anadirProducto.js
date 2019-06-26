

//section function preview
        $cantImg=0;
        function addInput(){
            //cambios de id para su respectivo input las imagenes
            $('#upload').attr('id',"upload"+$cantImg);
            $('#imgThubnails-preview').append('<input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">');
        }

        function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            if($('#preview').attr('src') === "img/imagen.png"){
                $('#preview').replaceWith('<img src="'+e.target.result+'" class="img-fluid"/>');
                //Aqui se agrega la parte del label que hace al llamado al input
                //hay que modificar con clases para que se vea bien en los diapositivos
                $('#imgThubnails-preview').append('<label id="label-thubnails" for="upload"><img class="img-fluid" src="img/imagen.png" alt="image to upload" width="100px" /></label> ');
                
                addInput();
                $cantImg++;
                }else{
                    if($cantImg <= 3 ){
                        //aqui se agrega la preview de la imagen thubnail
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
    $('document').ready(function(){
            $.ajaxSetup({
                headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });
       })
        