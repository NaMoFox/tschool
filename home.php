<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="vistas/img/plantilla/icono-azul.png">
    <link rel="stylesheet" href="vistas/css/Plantilla2.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>TECNOSCHOOL</title>
</head>
<body>
<!--===============================
HEADER
=================================-->
    <header class="bg-primary d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <img src="vistas/img/plantilla/icono-blanco.png" style="width:40px;height:40px;margin-left:30px;" alt="">
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="btn-head text-white nav-link px-2 ">TECNOSCHOOL</a></li>
        <li><a href="acercade.html" class="btn-head text-white nav-link px-2 ">Acerca de</a></li>
        <li><a href="diagramas.html" class="btn-head text-white nav-link px-2 ">Diagramas</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">
            <a href="index.php" class="btn-login">Login</a>
        </button>
      </div>
    </header>
  

<!--========================================
BODY
=========================================-->
<!--==============================
CARDS1
===============================-->
<div class="card-group">

    <div class="card">
        <img src="vistas/img/plantilla2/megafono.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
    </div>
    <div class="card">
        <img src="vistas/img/plantilla2/portatil.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
        </div>
    </div>
    <div class="card">
        <img src="vistas/img/plantilla2/noticias.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
        <h5><a href="vistas/modulos/noticias.html" class="btn-g">Enterate!</a></h5>
        </div>
    </div>

</div>
<br>
<br>
<!--========================================
CARDS2
=========================================-->
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="cc card border-primary mb-3" style="max-width: 18rem;">
                
                <div class="card-body text-primary">
                    <img src="vistas/img/plantilla/icono-azul.png" style="width: 110px;height: 110px;" alt="">
                    <h5 class="card-title">TecnoSchool</h5>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="cc card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-body text-primary">
                    <img src="vistas/img/plantilla2/github.png"  style="width: 110px;height: 110px;" alt="">
                    <h5 class="card-title">Github - tecoschool</h5>
                    <a href="https://github.com/NaMoFox/tschool">Tecnoschool/Github</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="cc card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-body text-primary ">
                    <h5>Integrantes</h5>
                    <li>Nader Montenegro</li>
                    <li>Cristian Quiroga</li>
                    <li>Iris Alarcon</li>
                    <li>Johan Celis</li>
                </div>
            </div>
        </div>


    </div>
</div>
<br>

<!--========================================
CARROUSEL
=========================================-->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="vistas/img/plantilla2/carrousel1.png" style="height:600px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="vistas/img/plantilla2/carrousel2.png" style="height:600px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="vistas/img/plantilla2/carrousel3.png" style="height:600px;" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br><br>


<!--========================================
CARDS3
=========================================-->
<div class="card-group">

    <div class="card">
        <img src="vistas/img/plantilla2/lista.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <br>
        <h5><a href="vistas/modulos/inscribete.html" class="btn-g">Inscribete ahora</a></h5>
        </div>
    </div>
    <div class="card">
        <img src="vistas/img/plantilla2/logros.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <br>
        <h5><a href="vistas/modulos/logros.html" class="btn-g">Logros</a></h5>
        </div>
    </div>
    <div class="card">
        <img src="vistas/img/plantilla2/cronograma.png" style="width: 300px;height: 300px;" class="card-img-top" alt="...">
        <div class="card-body">
            <br>
        <h5><a href="vistas/modulos/cronograma.html" class="btn-g">Cronograma</a></h5>
        </div>
    </div>

</div>
<br>
<br>






<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="#">TECNOSCHOOL</a>
  </div>
  <!-- Copyright -->
</footer>



</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>