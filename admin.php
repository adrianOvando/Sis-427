<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== "admin") {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Administrador</title>
</head>
<body>
    <h2>Bienvenido, Administrador</h2>
    <p>Has iniciado sesión como administrador.</p>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
