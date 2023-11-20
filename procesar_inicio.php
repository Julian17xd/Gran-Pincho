<?php
session_start();

include('../Pincho/global/database.php');

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Use prepared statements to prevent SQL injection
$sql = "SELECT * FROM Clientes WHERE CorreoElectronico = :correo AND Contraseña = :contrasena";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':contrasena', $contrasena);
$stmt->execute();

if ($stmt->rowCount() == 1) {
    // Inicio de sesión exitoso
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['cliente_id'] = $row['ID_Cliente'];
    $_SESSION['cliente_nombre'] = $row['Nombre'];
    // Puedes agregar más información de sesión si es necesario

    header('Location: index.php'); // Redirige al usuario a la página de inicio
} else {
    // Credenciales incorrectas
    echo "Correo o contraseña incorrectos. <a href='inicio.php'>Volver</a>";
}
?>

