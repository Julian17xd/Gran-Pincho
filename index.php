<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="author" content="Julian Reyes">
    <meta name="description" content="Págian web El Gran Pincho">
    <meta name="keywords" content="Hamburguesas, Pinchos, Arepas, Suizo, Perros Calientes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo -->
    <title>El Gran Pincho</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../ElGranPincho/assets/Img/favicon-32x32.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="../ElGranPincho/assets/css/style.css">
</head>
<body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-expand-md">
        <div class="container navbar-container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <img class="navbar-img" src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" width="60" alt="Logo-El-Gran-Pincho">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarToggler">
            <a class="navbar-brand" href="#">
                <img class="navbar-img" src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" width="168" alt="Logo-El-Gran-Pincho">
            </a>
            <ul class="navbar-nav mb-2 mb-lg-0 gap-lg-4">
              <li class="nav-item">
                <a class="nav-link nav-a btn-pedido px-3" aria-current="true" href="productos.php">Haz tu pedido</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="page" href="#productos">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="#nosotros">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="#ubicacion">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="#contacto">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link-style" href="mostrarCarrito.php">
                  <i class="bi bi-cart4 p-2 fs-3 text-white">(<?php
                    echo(empty($_SESSION["CARRITO"]))?0:count($_SESSION["CARRITO"]);
                  ?>)</i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="true" href="registro.php">
                  <i class="bi bi-person-circle"></i>
                </a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>

    <!-- Carrusel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="../ElGranPincho/assets/Img/RANCHERA-Slider.png" height="640px" class="d-block w-100 carrusel-img" alt="Silder-Hamburguesa">
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="../ElGranPincho/assets/Img/Slider-1.png" height="640px" class="d-block w-100 carrusel-img" alt="Slider-1">
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="../ElGranPincho/assets/Img/Slider-2.png" height="640px" class="d-block w-100 carrusel-img" alt="Slider-2">
        </div>
      </div>
      <button class="carousel-control-prev carousel-control" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next carousel-control" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>  

    <!-- Seccion Productos -->
    <section id="productos" class="text-center section">
      <h1 id="section-title">Productos</h1>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="productos.php">
              <img src="../ElGranPincho/assets/Img/H-Clasica-Patacon.jpeg" class="img-fluid img-productos" alt="Hamburguesa">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Hamburguesas</span>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="">
              <img src="../ElGranPincho/assets/Img/Arepas.jpg" class="img-fluid img-productos" alt="Arepas">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Arepas</span>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="">
              <img src="../ElGranPincho/assets/Img/Perro-Caliente.webp" class="img-fluid img-productos" alt="Perro-Caliente">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Perro Caliente</span>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="">
              <img src="../ElGranPincho/assets/Img/Patacon-Especial.jpeg" class="img-fluid img-productos" alt="Variedad-Platos">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Variedad en Platos</span>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="">
              <img src="../ElGranPincho/assets/Img/Pinchos.jpeg" class="img-fluid img-productos" alt="Pinchos">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Pinchos</span>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 productos-col">
            <a href="">
              <img src="../ElGranPincho/assets/Img/Bebidas.jpg" class="img-fluid img-productos" alt="Bebidas">
            </a>
            <div class="filtro-opaco"></div>
            <span class="productos-texto">Bebidas</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Seccion Nosotros -->
    <section id="nosotros" class="text-center section">
      <h2 id="section-title">Nosotros</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 d-flex align-items-center">
            <p class="text-black nosotros-p">Nacimos en agosto de 1999 en Neiva Huila con el nombre “La Carpa de Nena”. Adoptamos un estilo  callejero ya que nuestro fuerte siempre ha sido la comida callejera. Fue en el mes de abril de 2019 cuando se cambia de nombre “La Carpa de Nena” a “EL GRAN PINCHO”. Desde entonces hemos crecido para brindar un mejor servicio y atención. Queremos que nuestros invitados siempre puedan deleitarse y disfrutar en cada una de sus visitas con sus amigos, familias, compañeros de trabajo, entre otros.</p>
          </div>
          <div class="col-md-6 col-sm-12">
            <img src="../ElGranPincho/assets/Img/nosotros.jpeg" class="img-fluid nosotros-img" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Seccion Ubicacion -->
    <section id="ubicacion" class="text-center section">
      <h2 id="section-title">Ubicacion</h2>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12 div-ubicacio-info">
            <div>
              <i class="bi bi-geo-alt-fill" style="color: #780000;"></i>
              <span>Carrera 9 # 14 - 56 Chapinero</span>
            </div>
            <div>
              <i class="bi bi-telephone-fill" style="color: #780000;"></i>
              <span>+57 318 5191757 </span>
              <span>+57 321 2511811</span>
            </div>
            <div></div>
          </div>
          <div id="map" class="col-md-6 col-sm-12">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="ubicacion-iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=525&amp;height=325&amp;hl=en&amp;q=neiva, marmoreo&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Seccion Contacto -->
    <section id="contacto" class="text-center section mb-5">
      <h2 id="section-title">Contacto</h2>
      <div class="container">
        <form action="procesar_formulario.php" method="post" class="contacto-form">
          <div>
            <span class="conacto-span" style="font-weight: bold; font-size: 1.3rem;">Contáctanos</span>
            <img class="contacto-img" src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" width="90px" alt="logo_el_gran_pincho">
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="name" required>
            <label for="floatingInput">Tu nombre</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Correo</label>
          </div>
          <div class="form-floating mb-3">
            <input type="tel" class="form-control" id="floatingInput" placeholder="telefono" required inputmode="numeric" pattern="[0-9]+">
            <label for="floatingInput">Telefono (+57)</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Mensaje" required id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Mensaje</label>
          </div>
          <button type="button" class="btn btn-danger">Enviar</button>
      </form>
      </div>
    </section>

    <script src="main.js"></script>
<?php
  include 'templates/footer.php';
?>