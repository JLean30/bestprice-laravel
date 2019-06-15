<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                        <form class="form-login text-center"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <img src="./img/logo-inicio.png" alt="brand image" class="mt-2 mb-5">
                            <h3 >Login</h3>
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') || ('username') is-invalid @enderror" name="login" value="{{ old('email') ?: old('username') }}" required autocomplete="login" autofocus id="login"
                                    aria-describedby="emailHelp" placeholder="Enter email or username">
                                    @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <small id="emailHelp" class="ml-1 mb-4 form-text text-left text-muted">No olvides nunca
                                    tus credenciales.</small>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password"
                                    placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group custom-control custom-checkbox text-left ">
                                <input type="checkbox" name="remember" class="custom-control-input" id="sesion-checker" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label mt-2 text-muted" for="sesion-checker">Mantener sesión
                                    activa</label>
                            </div>
                            <button type="submit"
                                class="btn btn-bestprices btn-sesion mt-3 mb-3 w-50">ingresar</button><br>
                                @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                            <a id="recover-link" class="link-sesion linea-horizontal" href="{{route('password.request')}}">¿Has olvidado tu contraseña?</a><br>
                           <a href="{{ route('register') }}">  <p class="btn btn-bestprices btn-crearCuenta mb-4 " id="btn-crearCuenta">Crear Cuenta</p></a>

                        </form>
                       
                    </div>
                  
                    
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $('document').ready(function () {

        });
    </script>


</body>

</html>