<?php
session_start(); // Siempre inicia la sesión

// Verificamos si el usuario tiene la "pulsera" de sesión.
// Si no existe, lo mandamos de vuelta al inicio (index.php)
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit(); // Detenemos el código para que no cargue el resto
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <p>Has entrado exitosamente al área protegida del sistema.</p>
    
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
