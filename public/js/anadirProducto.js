//cambios randall
(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  $(function(){
    $(".validar").keydown(function(event){
        //alert(event.keyCode);
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    });
});
//preview de imagen ya existente
function previewExistent(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#'+id).attr('src',e.target.result);


        }
        reader.readAsDataURL(input.files[0]);
    }
}
 

//section function preview
$cantImg=$("body #imgThubnails-preview").children("li").length;
        function addInput(){
            $cantImg=$("body #imgThubnails-preview").children("li").length;
            //cambios de id para su respectivo input las imagenes
            $('#upload').attr('id',"upload"+$cantImg);
            $('#imgThubnails-preview').append('<input type="file" hidden name="photos[]"  id="upload" onchange="filePreview(this)">');
        }

        function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
            if($('#preview').attr('src') === "/img/imagen.png"){
                $('#preview').replaceWith('<img src="'+e.target.result+'" class="img-fluid"/>');
                //Aqui se agrega la parte del label que hace al llamado al input
                //hay que modificar con clases para que se vea bien en los diapositivos
                $('#imgThubnails-preview').append('<label id="label-thubnails" for="upload"><img class="img-fluid" src="/img/imagen.png" alt="image to upload" width="100px" /></label> ');
                
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
        