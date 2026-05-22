<?php
session_start(); // Inicia la sesión

// Usuario de prueba simple
if ($_POST['user'] == "alumno") {
    $_SESSION['usuario'] = $_POST['user']; // Guardamos el nombre en la variable de sesión
    header("Location: dashboard.php"); // Si es correcto, lo manda al dashboard
} else {
    echo "Usuario incorrecto. <a href='index.php'>Volver</a>";
}
?>
