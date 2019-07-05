
                <nav class="navbar navbar-expand-lg navbar-dark " >
                        <a class="navbar-brand" href="{{ url('/') }}">BESTPRICES</a>
                          <form class="form-inline my-2 my-lg-0 search-navbar" action="{{route('buscar-producto')}}" method="POST">
                              @csrf
                                <input class="form-control mr-sm-2 input-search" name="buscar" type="search" placeholder="¿Que estás buscando?" aria-label="Search">
                                <button class="btn btn-dark btn-bestprices my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                          </form>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                              <a class="nav-link" href="./index.html">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#articulos-nuevos">Articulos Destacados</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="/anadir-producto">Añadir Producto</a>
                            </li>
                            <li class="nav-item">
                                @guest
                              <a class="nav-link " href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                              @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>
  
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/profile/{{Auth::id()}}">
                                     {{ __('Perfil') }}
                                 </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
                                      
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                              
                            </li>
                          </ul>

                       
                          
                        </div>
                      </nav>