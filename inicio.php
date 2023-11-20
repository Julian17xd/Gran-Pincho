<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadatos -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo -->
    <title>Iniciar sesion</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="Img/favicon-32x32.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../ElGranPincho/assets/css/inicio.css">
</head>
<body>

    <div class="container-fluid row">
        <section class="col-sm-4 section-flex vh-100 section-img">
            <figure>
                <img src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" class="img-fluid img-sm" alt="Logo-El-Gran-Pincho">
            </figure>
        </section>

        <section class="col-sm-8 section-flex bg-white gap-3 section-form">
            <form action="procesar_inicio.php" method="post" class="d-flex flex-column gap-5">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Iniciar sesión</h2>
                    <figure>
                        <img src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" class="img-fluid img-xs" alt="Logo-El-Gran-Pincho">
                    </figure>
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>
                </div>
        
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" name="contrasena" placeholder="Ingresa tu contraseña" required>
                </div>
        
                <button type="submit" class="btn btn-primary p-sm-2">Login</button>
            </form>
        </section>  
    </div>
</body>
</html>