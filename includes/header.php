<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Estructuras PHP - Mini sitio</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header class="site-header">
    <div class="contenedor">
        <h1 class="logo">Estructuras PHP</h1>
    </div>
</header>
<?php
// Contador simple de visitas usando sesión
if (!isset($_SESSION['visitas'])) {
    $_SESSION['visitas'] = 0;
}
$_SESSION['visitas']++;
?>
