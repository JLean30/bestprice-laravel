@extends('layouts.bestprices')
@section('content')
<!--@inject('controller', 'App\Http\Controllers\ControladorPrincipal')-->
<div class="row">
    <div class="col-xl-2 offset-xl-1 offset-md-0 offset-lg-0 card form-group mt-5">

      <div>
        <label class="mt-3" for="">Marca</label>
        <select class="form-control form-control-sm">
          <option value="asus">NVIDIA</option>
          <option value="msi">AMD</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Fabricante</label>
        <select class="form-control form-control-sm">
          <option value="asus">Asus</option>
          <option value="msi">MSI</option>
          <option value="gigabyte">Gigabyte</option>
          <option value="asrock">ASRock</option>
          <option value="shapirre">Shappire</option>
          <option value="evga">EVGA</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Precios</label>
        <input class="form-control" type="range" list="tickmarks">
        <datalist id="tickmarks">
          <option value="10000">
          <option value="50000">
          <option value="100000">
          <option value="500000">
          <option value="1000000">
        </datalist>
      </div>

      <div>
        <label for="">Estado</label>
        <select class="form-control form-control-sm">
          <option value="nuevo">Nuevo</option>
          <option value="usado">Usado</option>
        </select>
      </div>

      <div>
        <label class="mt-2" for="">Ubicacion</label>
        <select class="form-control form-control-sm mb-3">
          <option value="sanJose">San Jose</option>
          <option value="heredia">Heredia</option>
          <option value="cartago">Cartago</option>
          <option value="puntarenas">Puntarenas</option>
          <option value="limon">Limon</option>
          <option value="guanacaste">Guanacaste</option>
        </select>
      </div>

      <div>
        <button></button>
      </div>

    </div>


    <div class="container container-productos">
      <div class="card-deck">
        <div class="card shadow-sm">
          <p class="bg-dark text-light position-absolute card-tipoProducto ">Artículo nuevo</p>

          <img class="card-img-top" src="img/_20180212145116_Mini_Micro_Cases.png" alt="Card image cap">
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
@endsection