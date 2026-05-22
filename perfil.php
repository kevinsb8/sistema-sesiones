<?php
session_start(); // ¡Fundamental! Siempre al principio

// Comprobamos si la "pulsera" de sesión existe
if (!isset($_SESSION['usuario'])) {
    // Si no existe, lo mandamos fuera
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mi Perfil</title>
</head>
<body>
    <h1>Bienvenido a tu perfil, <?php echo $_SESSION['usuario']; ?></h1>
    <p>Esta es tu zona privada.</p>
    
    <br>
    <a href="cerrar.php">Cerrar sesión</a>
</body>
</html>
