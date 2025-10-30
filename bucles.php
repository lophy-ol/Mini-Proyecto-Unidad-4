<?php
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/menu.php';
?>
<main class="contenedor">
    <h2>Bucles en PHP</h2>

    <?php
    // for: mostrar números del 1 al 5
    ?>
    <section>
        <h3>For</h3>
        <p>Numeros 1 a 5:</p>
        <ul>
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <li><?php echo $i; ?></li>
            <?php endfor; ?>
        </ul>
    </section>

    <?php
    // while: contar regresivamente
    $n = 5;
    ?>
    <section>
        <h3>While</h3>
        <p>Cuenta regresiva:</p>
        <ul>
            <?php while ($n > 0): ?>
                <li><?php echo $n; $n--; ?></li>
            <?php endwhile; ?>
        </ul>
    </section>

    <?php
    // foreach: recorrer un array asociativo
    $frutas = ["manzana", "plátano", "pera"];
    ?>
    <section>
        <h3>Foreach</h3>
        <p>Lista de frutas:</p>
        <ul>
            <?php foreach ($frutas as $fruta): ?>
                <li><?php echo htmlspecialchars($fruta); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <?php
    // Usando bucle para crear una tabla de productos
    $productos = [
        ["nombre" => "Gorra", "precio" => 120],
        ["nombre" => "Calcetines", "precio" => 60],
        ["nombre" => "Sudadera", "precio" => 750],
    ];
    ?>
    <section>
        <h3>Tabla de productos (foreach)</h3>
        <table class="tabla">
            <thead>
                <tr><th>Producto</th><th>Precio</th></tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $p): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($p['nombre']); ?></td>
                        <td>$<?php echo number_format($p['precio'], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
