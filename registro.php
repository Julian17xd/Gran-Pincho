<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metadatos -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo -->
    <title>Registrar</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../ElGranPincho/assets/Img/favicon-32x32.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../ElGranPincho/assets/css/registro.css">
</head>

<body>

    <div class="container-fluid row">
        <section class="col-sm-4 section-flex vh-100 section-img">
            <figure>
                <img src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" class="img-fluid img-sm" alt="Logo-El-Gran-Pincho">
            </figure>
        </section>

        <section class="col-sm-8 section-flex bg-white gap-3 section-form">
           
            <form action="procesar_registro.php" method="post" class="d-flex flex-column gap-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Registrar cuenta</h2>
                    <figure>
                        <img src="../ElGranPincho/assets/Img/logo_el_gran_pincho.png" class="img-fluid img-xs" alt="Logo-El-Gran-Pincho">
                    </figure>
                </div>
                <div class="form-group">
                    <label for="nombre_completo">Nombre Completo:</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Ingresa tu nombre" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>
                </div>
                <div class="form-group">
                    <label for="contraseña">Contraseña:</label>
                    <input type="password" class="form-control" id="contraseña" name="contrasena" placeholder="Ingresa tu contraseña" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa tu dirección" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa tu número" required>
                </div>
                <button type="submit" class="btn btn-primary p-sm-2">Crear Cuenta</button>
                <p>¿Ya tienes una cuenta? <a href="inicio.php">Iniciar sesión</a></p>
            </form>
            
        </section>
    </div>


    <!-- 
    <h1>Crea tu cuenta</h1>

    <form action="procesar_registro.php" method="post">
    <label for="nombre_completo">Nombre Completo:</label>
    <input type="text" id="nombre_completo" name="nombre_completo" required><br><br>

    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required><br><br>

    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required><br><br>

    <label for="floatingInput">Telefono (+57)</label>
    <input type="tel" class="form-control" id="floatingInput" name="telefono" required inputmode="numeric" pattern="[0-9]+"><br><br>
    

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" required>

    <button type="submit">Registrar</button>
    
    </form>

    <p>¿Ya tienes una cuenta? <a href="inicio.php">Inicia sesión</a></p>
    -->
</body>

</html>