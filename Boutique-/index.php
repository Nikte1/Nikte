<?php
require 'sesion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal - Boutique</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Panel de Administración - Boutique</h2>
    <nav>
        <ul>
            <li><a href="crud_clientes.php">Clientes</a></li>
            <li><a href="crud_inventarios.php">Inventarios</a></li>
            <li><a href="crud_proveedores.php">Proveedores</a></li>
            <li><a href="crud_pedidos.php">Pedidos</a></li>
            <li><a href="crud_ventas.php">Ventas</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
</body>
</html>