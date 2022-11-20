






<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" >
      <div class="container-fluid">
        <a class="navbar-brand fs-2">Nucleo Bruselas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link fs-3" href="{{url('/')}}">Inicio</a>
              </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="{{url('/doc')}}">Doctores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="{{url('/ubi')}}">Ubicación</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fs-3" href="{{url('/acer')}}">Acerca de nosotros</a>
            </li>
            

          </ul>

        
              <a class="btn btn-primary btn-lg" href="{{ route('login') }}">Iniciar Sesion</a>
          
          
              <a class="btn btn-success btn-lg" href="{{ route('register') }}">Registrarse</a>
        

  
        </div>
      </div>
    </nav>
  </header>