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
                <a class="nav-link nav-a" aria-current="page" href="index.php">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="index.php">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="index.php">Ubicación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="index.php">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a btn-pedido px-3" aria-current="true" href="productos.php">Haz tu pedido</a>
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