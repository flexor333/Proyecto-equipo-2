
  <body>
 {{-- header    --}}

 @extends('dash.index')


@section('content')

<main>

  


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
<br>
<br>






<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    
    <div class="carousel-item active">

      <img src="img/portada1.jpg" class="rounded mx-auto d-block" width="1500" height="500" alt="...">
      

      <div class="container">
        <div class="carousel-caption text-start">
          <h1>Bienvenido</h1>
          <p>La Clínica Núcleo medico 514 está ubicada a dos cuadras de la Glorieta Niños Héroes.</p>
          <p><a class="btn btn-lg btn-primary" href="{{url('/ubi')}}">Muéstrame donde</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/portada2.jpg" class="rounded mx-auto d-block" width="1000" height="100" alt="...">

      <div class="container">
        <div class="carousel-caption">
          <h1>Conoce nuestras cómodas instalaciones.</h1>
          <p>Contamos con una sala de estar y una recepcionista que le ayudara a aclarar sus dudas.</p>

        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/portada4.jpg" class="rounded mx-auto d-block" width="1000" height="100" alt="...">

      <div class="container">
        <div class="carousel-caption">
          <h1>Médicos especializados.</h1>
          <p>Cuentan con una amplia gama de especialidades como cirugía general, 
              psicología, odontología, nutriología, medicina general, entre otras.</p>
          <p><a class="btn btn-lg btn-primary" href="{{url('/doc')}}">Medicos</a></p>
        </div>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>












  <div class="container marketing">

    <!-- Three columns of text below the carousel -->



  <div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="img/registro.png" alt="" width="90" height="100">
    <h1 class="display-5 fw-bold">Registrar una cita</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Puede registrar una cita a través de nuestro sitio, haciendo una llamada o acudiendo a nuestra clínica.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-outline-primary btn-lg px-4">Ir a la clínica</button>
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Hacer cita</button>
        <button type="button" class="btn btn-outline-primary btn-lg px-4">Hacer llamada</button>
      </div>
    </div>
  </div>




    <!-- START THE FEATURETTES -->
    <h2 class="featurette-heading fw-normal lh-1">Noticias Medicas</h2>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Por qué algunos cánceres de mama se vuelven resistentes a los tratamientos</h2>
        <p class="lead">Especialistas norteamericanos descubrieron por qué algunas células tumorales en esta región no pueden ser tratadas y trazaron los primeros pasos para alcanzar un método para poder revertir su comportamiento. Los detalles del hallazgo.</p>
        <a class="btn btn-primary" data-bs-toggle="collapse" href="#cancer" role="button" aria-expanded="false" aria-controls="collapseExample">
          Mostrar mas..
        </a>

        <div class="collapse" id="cancer">
          
          <p class="lead">Solo en Argentina, cada año, más de 20.000 pacientes son diagnosticadas con cáncer de mama. 
            Esta cifra, representa casi un 17% de todos los tumores malignos detectados, siendo la enfermedad oncológica más frecuente en mujeres. 
            De acuerdo a datos de la Organización Mundial de la Salud (OMS), cada año se producen 1,38 millones de nuevos casos y 458.000 muertes. 
            Es que uno de los puntos máscomplejos de esta patología es la resistencia al tratamiento que presentan algunas células cancerígenas.</p>
          
            <a class="btn btn-primary"  href="{{url('/can')}}" role="button">
              Leer noticia completa
            </a>
        </div>

    


      </div>
      <div class="col-md-5">
        <img src="img/noticias/cancer1.png" width="100%" height="100%">


        
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Cómo prevenir la retención de líquidos y cuándo es señal de otras enfermedades</h2>
        <p class="lead">Los cambios hormonales, el consumo de sodio y el sedentarismo favorecen su aparición. 
          Consejos para consultar al médico y descartar otras afecciones.</p>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#liquidos" role="button" aria-expanded="false" aria-controls="collapseExample">
            Mostrar mas..
          </a>

          <div class="collapse" id="liquidos">
          
            <p class="lead">La retención de líquidos es la hinchazón causada por la acumulación anormal de líquidos en el cuerpo. 
              El líquido se aloja bajo la piel, dentro de los tejidos que están fuera del sistema circulatorio, que es el encargado de transportar la sangre por todo el el organismo. 
              Si bien este proceso se evidencia con mayor frecuencia en los pies y las piernas, también puede ocurrir en las manos, los brazos, la cara y el abdomen.</p>
            
              <a class="btn btn-primary"  href="{{url('/ubi')}}" role="button">
                Leer noticia completa
              </a>
          </div>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/noticias/liquidos1.png" width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Cuál es la hierba que ayuda a eliminar eructos y gases intestinales</h2>
        <p class="lead">La presencia de estos malestares, además de vergüenza, puede interferir con las actividades cotidianas de quien lo padece, 
          pero es muy sencillo eliminarlos.</p>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#hierba" role="button" aria-expanded="false" aria-controls="collapseExample">
            Mostrar mas..
          </a>

          <div class="collapse" id="hierba">
          
            <p class="lead">Los eructos y los gases intestinales, acompañados de distensión, 
              dolor o hinchazón del abdomen, pueden interferir en las actividades cotidianas de quien la padece e incluso causar vergüenza. <br>
              En muchas ocasiones, los eructos y los gases intestinales no suelen indicar que exista una afección grave y, por lo general, llegan a desaparecer con simples cambios en el estilo de vida.</p>
            
              <a class="btn btn-primary"  href="{{url('/ubi')}}" role="button">
                Leer noticia completa
              </a>
          </div>

      </div>
      <div class="col-md-5">
        <img src="img/noticias/hierbas1.png" width="100%" height="100%">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


</main>      
  </body>

    <!-- FOOTER -->
@endsection