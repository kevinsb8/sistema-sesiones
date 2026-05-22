<?php
session_start(); // Iniciamos para poder destruirla

// 1. Destruimos la sesión
session_destroy(); 

// 2. Redirigimos al usuario al login
header("Location: index.php"); 
exit();
?>
