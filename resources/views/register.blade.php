<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="background-login">
<div class="container-fluid " style="
    min-width: 98vw;">
<div class="col-12 mt-3 ml-2 text-left">
     <a href="{{route('/')}}" class="text-white btn-atras ">
        < Inicio </a> </div> <!-- Default form login -->
    <div class="col-sm-12 col-md-12 col-lg-6 mx-auto container-login">

<form class="form-registrar text-center mx-auto" method="POST" action="{{ route('register') }}">
    @csrf
    <h3 class="color-title  mb-3 text-left">
        Registro
    </h3>

    <div class="form-row mb-4">
        <div class="col-6">
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-6">
            <input type="text" id="lastName" name="lastName" class="form-control @error('lastName') is-invalid @enderror" value="{{ old('lastName') }}" required autocomplete="lastname" autofocus  placeholder="Apellidos">
            @error('lastName')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="col">
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  value="{{ old('email-registro') }}" required autocomplete="email-registro" autofocus placeholder="Email">
                @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
    </div>
    <div class="form-row">
            <div class="col"><input id="username" name="username" class="form-control @error('username') is-invalid @enderror" type="text" value="{{ old('username') }}" required autocomplete="username-registro" autofocus placeholder="Nombre de usuario">
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
                 
    </div>
    <div class="form-row mb-4">
        <div class="col text-left">
                <small class="text-muted "> Recuerda que tu usuario debe ser especial como tú</small>
    
        </div>
           
    </div>
    <div class="form-row">
        <div class="col mb-4"><input id="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Telefono">
            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
             
</div>
    <div class="form-row mb-4">
        <div class="col-6">
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password-registro" autofocus placeholder="Contraseña">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-6">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " required autocomplete="new-password" autofocus placeholder="Repetir contraseña">
           

        </div>
    </div>
    <div class="form-row">
            <div class="col">
                    <input type="text" id="location" name="location" class="form-control @error('location') is-invalid @enderror" value="{{ old('location') }}" required autocomplete="location" autofocus placeholder="ubicacion">
                    @error('location')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
            </div>
        

    </div>


    <button class="btn btn-bestprices btn-sesion text-center mt-4 mb-2" type="submit" id="registro-btn">Registrarse</button>
    <p class="text-muted form-login__text-conditions"> <small>
            Al hacer clic en "Registrar", aceptas nuestras
            <span>Condiciones</span> , la<span> Política de datos</span> y la <span>Política de
                cookies</span> .

    </small> </p>
    <br>
    <div>
       <a href="{{route('login')}}"><p class="btn btn-bestprices btn-crearCuenta  text-center mb-4 " id="btn-login">¿Ya tienes cuenta?</p></a>
    </div>
    </form>

</div>
    </div>
</body>

</html>