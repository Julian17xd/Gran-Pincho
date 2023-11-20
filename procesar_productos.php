<?php
// Iniciar o restaurar la sesión
session_start();

// Verificar si se ha enviado un formulario para agregar al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'], $_POST['quantity']) && is_numeric($_POST['product_id']) && is_numeric($_POST['quantity'])) {
        $product_id = intval($_POST['product_id']);
        $quantity = intval($_POST['quantity']);
        
        // Comprobar si el producto existe en la base de datos y obtener su información

        // Agregar el producto al carrito de compra en la sesión
        $_SESSION['cart'][] = ['product_id' => $product_id, 'quantity' => $quantity];
    }
}

// Redirigir de nuevo a la página de productos
header('Location: tienda.php');
