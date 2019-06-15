<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil Administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container-fluid  overflow-hidden">
        <header>

            <nav class="navbar navbar-expand-lg navbar-dark ">
                <a class="navbar-brand" href="./index.html">BESTPRICES</a>
                <form class="form-inline my-2 my-lg-0 search-navbar">
                    <input class="form-control mr-sm-2 input-search" type="search" placeholder="¿Que estás buscando?"
                        aria-label="Search">
                    <button class="btn btn-outline-success btn-bestprices my-2 my-sm-0" type="submit"><i
                            class="fas fa-search"></i></button>
                </form>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Articulos nuevos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorias
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">tarjetas madre</a>
                                <a class="dropdown-item" href="#">Tarjeta de video</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Iniciar Sesión</a>
                        </li>
                    </ul>

                </div>
            </nav>


        </header>
        <div class="row shadow-sm ">
            <div class="col-sm-12 col-md-3 col-lg-3 offset-lg-2 offset-md-1 mt-5 text-center">
                <img src="./img/admin.jpg" alt="profile picture" class=" img-fluid img-circular">
            </div>
            <div class="col-sm-12 col-md-7 col-lg-6 align-self-center centrado-cel">
                <h3>Administrador<a role="button"></a> </h3>
            </div>
            <ul class="nav nav-pills mx-auto " id="pills-tab" role="tablist">
                <li class="nav-item mr-4 margenes-phone">
                    <a class="nav-link active" id="pills-acercaDe-tab" data-toggle="pill" href="#pills-acercaDe"
                        role="tab" aria-controls="pills-acercaDe" aria-selected="true">Aceptados</a>
                </li>
                <li class="nav-item mr-4 margenes-phone">
                    <a class="nav-link" id="pills-productos-tab" data-toggle="pill" href="#pills-productos" role="tab"
                        aria-controls="pills-productos" aria-selected="false">Pendientes</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="section-gray">
        <div class="row">
            <div class="container container-productos">
                <div class="card-deck">
                  <div class="card shadow-sm">
                    <p class="bg-dark text-light position-absolute card-tipoProducto ">Artículo nuevo</p>
                    <img class="card-img-top" src="img/_20180212145116_Mini_Micro_Cases.png" alt="Card image cap">
                    <div class="card-body">
                        <a href="./articulo.html">
                                <h5 class="card-title">MSI GeForce RTX- 2080 - 8GB VENTUS</h5>
                                <p class="card-text">
                                  Los auriculares Skullcandy INK'D 2 Earbud presentan un
                                  perfil elegante y u..
                                </p>
                                <p class="card-text"><small class="text-muted">Añadido por <a href="./profile.html"
                                      class="text-info">thanos</a> </small></p>
                                <p class="card-text"><small class="text-primary">₡30000</small></p>
                        </a>
                    </div>
                  </div>
                  <div class="card shadow-sm">
                    <p class="bg-dark text-light position-absolute card-tipoProducto ">Artículo nuevo</p>
                    <img class="card-img-top" src="img/_20180212145116_Mini_Micro_Cases.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">MSI GeForce RTX- 2080 - 8GB VENTUS</h5>
                      <p class="card-text">
                        Los auriculares Skullcandy INK'D 2 Earbud presentan un
                        perfil elegante y u..
                      </p>
                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                  <div class="card shadow-sm">
                    <p class="bg-dark text-light position-absolute card-tipoProducto ">Artículo nuevo</p>
                    <img class="card-img-top" src="img/CP-SEASONIC-SSR-850TD-1.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">MSI GeForce RTX- 2080 - 8GB VENTUS</h5>
                      <p class="card-text">
                        Los auriculares Skullcandy INK'D 2 Earbud presentan un
                        perfil elegante y u..
                      </p>
                      <p class="card-text"><small class="text-muted">Añadido por <a href="./profile.html"
                            class="text-info">thanos</a> </small></p>
                      <p class="card-text"><small class="text-primary">₡30000</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>



        <!-- Footer -->
        <footer class="page-footer font-small bg-dark mt-5">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Grid row-->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-12 py-5">
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Twitter -->
                            <a class="tw-ic">
                                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!-- Google +-->
                            <a class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Linkedin -->
                            <a class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Instagram-->
                            <a class="ins-ic">
                                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <!--Pinterest-->
                            <a class="pin-ic">
                                <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                            </a>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="./home.html"> Bestprices.com</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function () {


        })
    </script>
</body>

</html>