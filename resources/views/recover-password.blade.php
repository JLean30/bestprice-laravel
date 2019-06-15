<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recuperacion contraseña</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="background-login">
<div class="container-fluid " style="
    min-width: 98vw;">
<div class="col-12 mt-3 ml-2 text-left">
     <a href="{{route('/')}}" class="text-white btn-atras ">
        < Inicio </a> </div> <!-- Default form login -->
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto container-login">
<form class="form-recover mx-auto text-center">
    <h2 class="color-title mt-4 mb-3">
        Recuperar Contraseña
    </h2>
    <div class="form-row ">
       <div class="col-12"><input type="email" id="email-recover" class="form-control" placeholder="Email">
       </div>
       <button class="btn btn-bestprices btn-sesion mx-auto mt-2 mb-4" id="recover-btn">Recuperar</button>
        
</form>

  <!--termina form recuperar-->

</div>
</div>

    
</body>

</html>