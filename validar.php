<?php

$usuarios = [
    "admin" => "admin123",
    "user" => "user123"
];

$a = $_POST["usuario"];
$b = $_POST["contrasena"];

if ($a === "admin" && $b === $usuarios["admin"]) {
    echo "<a href='admin.php'>Ir a Admin</a>";
} elseif ($a === "user" && $b === $usuarios["user"]) {
    echo "<a href='user.php'>Ir a Usuario</a>";
} else {
    echo "<a href='login.html'>Intentar de nuevo</a>";
}

?>
