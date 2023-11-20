<?php
    include('../ElGranPincho/global/database.php');

    // Obtiene los datos del formulario
    $nombre = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    // Realiza la inserción en la tabla "Clientes"
    $sql = "INSERT INTO Clientes (Nombre, CorreoElectronico, Contraseña,Telefono, Direccion) VALUES ('$nombre', '$correo', '$contrasena','$telefono', '$direccion')";

    if (mysqli_query($conn, $sql)) {
        echo "Registro exitoso. Ahora puedes <a href='inicio.php'>iniciar sesión</a>.";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>