<?php
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/menu.php';

// Ejemplo de variables y funciones del sistema
$usuario = "Estudiante";
$fecha = date('l, d \d\e F \d\e Y'); // fecha legible
$ejemplo_array = [1,2,3]; // solo para demostrar count()
?>
<main class="contenedor">
    <h2>Bienvenido, <?php echo $usuario; ?>!</h2>
    <p>Hoy es <?php echo $fecha; ?>.</p>

    <section>
        <h3>¿Qué encontrarás en este sitio?</h3>
        <p>Ejemplos prácticos de estructuras de control en PHP: condicionales, bucles y arreglos.</p>
        <p>En este servidor se detectó <?php echo count($ejemplo_array); ?> elementos en un array de ejemplo.</p>
    </section>

    <section>
        <h3>Ejemplo corto: mostrar productos (array simple)</h3>
        <?php
        $productos = [
            ["nombre" => "Camiseta", "precio" => 199.99],
            ["nombre" => "Pantalón", "precio" => 399.50],
        ];
        foreach ($productos as $p) {
            echo "<div class='card'>";
            echo "<strong>" . htmlspecialchars($p['nombre']) . "</strong><br>";
            echo "Precio: $" . number_format($p['precio'], 2) . "<br>";
            echo "</div>";
        }
        ?>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
