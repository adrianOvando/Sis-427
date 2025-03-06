<?php
session_start();

// Usuarios predefinidos
$usuarios = [
    "admin" => "admin123",
    "user" => "user123"
];

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
    $_SESSION['usuario'] = $username;
    
    if ($username === "admin") {
        header("Location: admin.php");
    } else {
        header("Location: user.php");
    }
} else {
    echo "Usuario o contraseña incorrectos. <a href='login.html'>Intentar de nuevo</a>";
}
?>
