<?php
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/menu.php';
?>
<main class="contenedor">
    <h2>Arreglos en PHP</h2>

    <?php
    // Array indexado
    $colores = ["Rojo", "Verde", "Azul"];

    // Array asociativo
    $persona = [
        "nombre" => "Marta",
        "edad" => 28,
        "profesion" => "Ingeniera"
    ];

    // Array multidimensional (lista de productos)
    $catalogo = [
        ["id" => 1, "nombre" => "Bolígrafo", "precio" => 15.5],
        ["id" => 2, "nombre" => "Cuaderno", "precio" => 45.0],
        ["id" => 3, "nombre" => "Mochila", "precio" => 550.99],
    ];
    ?>

    <section>
        <h3>Array indexado</h3>
        <p>Colores disponibles (count = <?php echo count($colores); ?>):</p>
        <ul>
            <?php foreach ($colores as $c): ?>
                <li><?php echo htmlspecialchars($c); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h3>Array asociativo</h3>
        <p>Información de la persona:</p>
        <ul>
            <?php foreach ($persona as $k => $v): ?>
                <li><?php echo htmlspecialchars($k) . ': ' . htmlspecialchars($v); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section>
        <h3>Array multidimensional</h3>
        <p>Catálogo de productos:</p>
        <table class="tabla">
            <thead>
                <tr><th>ID</th><th>Producto</th><th>Precio</th><th>Estado</th></tr>
            </thead>
            <tbody>
                <?php foreach ($catalogo as $item): ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo htmlspecialchars($item['nombre']); ?></td>
                        <td>$<?php echo number_format($item['precio'], 2); ?></td>
                        <td>
                            <?php
                            // Ejemplo de uso de condicional dentro del recorrido
                            if ($item['precio'] > 100) {
                                echo "Costo alto";
                            } else {
                                echo "Costo accesible";
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
