<?php
    include('.//global/config.php');
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
                <a class="nav-link nav-a" aria-current="page" href="index.php">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-a" aria-current="true" href="productos.php">Productos</a>
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

<div class="container" style="margin-top:130px">
    <br>
    <h3>lista del carrito</h3>
    <?php if(!empty($_SESSION["CARRITO"])){?>
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th width="40%">Descripcion</th></th>
                <th width="15%" class="text-center">Cantidad</th>
                <th width="20%" class="text-center">Precio</th>
                <th width="20%" class="text-center">Total</th>
                <th width="5%">--</th>
            </tr>
            <?php $total=0;?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
            <tr>
                <td width="40%"><?php echo $producto['NOMBRE']?></td>
                <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
                <td width="20%" class="text-center"><?php echo $producto['PRECIO']?></td>
                <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
                <td width="5%">
                    <form action="" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY) ;?>">
                        <button
                        class="btn btn-danger" 
                        type="submit"
                        name="btnAccion"
                        value="Eliminar"
                        >Eliminar</button>
                    </form>
                
                </td>
            </tr>
            <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
            <?php }?> 
            <tr>
                <td colspan="3" align="right"><h3>Total</h3></td>
                <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="5">
                    <form action="pagar.php" method="post">
                        <div class="alert alert-success">
                            <div class="form-group">
                                <label for="my-input">Correo de contacto</label>
                                <input id="email" name="email" class="form-control" type="email" placeholder="Por favor escribe tu correo" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Los productos se enviarán a este correo</small>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block w-100" type="submit" name="btnAccion" value="proceder">Proceder a pagar >></button>
                    </form>
                </td>
            </tr>

        </tbody>
    </table>
    <?php } else{?>
    <div class="alert alert-success">No hay productos en el carrito</div>
    <?php }?>    
</div>


<?php
  include 'templates/footer.php';
?>