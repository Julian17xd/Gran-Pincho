<?php
include('.//global/database.php');
//include('.//global/config.php');
include('carrito.php');
//include 'templates/cabecera.php';
?>
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
  <link rel="stylesheet" href="../Pincho/assets/css/productos.css">
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
            <a class="nav-link nav-a" aria-current="page" href="../ElGranPincho/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link-style" href="mostrarCarrito.php">
              <i class="bi bi-cart4 p-2 fs-3 text-white">(<?php
                                                          echo (empty($_SESSION["CARRITO"])) ? 0 : count($_SESSION["CARRITO"]);
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

  <div class="container-fluid" style="margin-top:130px">
    <?php if ($mensaje != "") { ?>
      <div class="alert alert-success">
        <?php echo $mensaje; ?>
        <a href="mostrarCarrito.php" class="badge badge-success">Ver Carrito</a>
      </div>
    <?php } ?>

    <div id="productos-div" class="d-flex align-items-start justify-content-around lateral-menu gap-3 ">
      <!-- Barra lateral con botones de categoría -->
      <div class="nav flex-column nav-pills lateral-menu-btns" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <!-- ... Tu código para los botones de categoría aquí ... -->
        <div class="titulo container">
          <h1 class="text-white">Nuestros Productos</h1>
          <hr class="text-white">
        </div>
        <button class="nav-link active d-flex align-items-center gap-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
          <div>
            <figure>
              <img class="lateral-menu-imgs" src="../Pincho/assets/Img/hamburguesa-con-queso.png" alt="">
            </figure>
          </div>
          <div>
            Hamburguesas
          </div>
        </button>
      </div>

      <!-- Tarjetas de productos -->
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php
            $sentencia = $pdo->prepare("SELECT * FROM `productos`");
            $sentencia->execute();
            $listaProductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <?php foreach ($listaProductos as $producto) { ?>
              <div class="col">
                <div class="card">
                  <img src="<?php echo $producto['Imagen']; ?>" class="card-img-top" style="height: 250px;" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $producto['NombreProducto']; ?></h5>
                    <p class="card-text"><?php echo $producto['Descripcion']; ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                      <form action="" method="post">
                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID_Producto'], COD, KEY); ?>">
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['NombreProducto'], COD, KEY); ?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'], COD, KEY); ?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY); ?>">
                        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">agregar al carrito</button>
                      </form>

                      <span class="card-precio">$<?php echo $producto['Precio']; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include 'templates/footer.php';
  ?>