<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== "user") {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Usuario</title>
</head>
<body>
    <h2>Bienvenido, Usuario</h2>
    <p>Has iniciado sesión correctamente.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
