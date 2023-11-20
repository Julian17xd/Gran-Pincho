<?php
session_start();

include('../ElGranPincho/global/database.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena']; //Encryptado

$sql = "SELECT * FROM Clientes WHERE CorreoElectronico = '$correo' AND Contraseña = '$contrasena'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 1) {
    // Inicio de sesión exitoso
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION['cliente_id'] = $row['ID_Cliente'];
    $_SESSION['cliente_nombre'] = $row['Nombre'];
    // Puedes agregar más información de sesión si es necesario

    header('Location: index.php'); // Redirige al usuario a la página de inicio
} else {
    // Credenciales incorrectas
    echo "Correo o contraseña incorrectos. <a href='inicio.php'>Volver</a>";
}

mysqli_close($conn);
?>
