<?php
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/menu.php';
?>
<main class="contenedor">
    <h2>Condicionales en PHP</h2>

    <?php
    // Ejemplo 1: if / else / elseif
    $nota = 78; // cambiar valor para probar
    if ($nota >= 90) {
        $resultado = "Excelente";
    } elseif ($nota >= 70) {
        $resultado = "Bueno";
    } elseif ($nota >= 50) {
        $resultado = "Regular";
    } else {
        $resultado = "Insuficiente";
    }
    ?>
    <section>
        <h3>If / Else / Elseif</h3>
        <p>Nota: <?php echo $nota; ?> — Resultado: <strong><?php echo $resultado; ?></strong></p>
    </section>

    <?php
    // Ejemplo 2: switch
    $diaNumero = date('N'); // 1 (Lunes) .. 7 (Domingo)
    switch ($diaNumero) {
        case 6:
        case 7:
            $tipoDia = "Fin de semana";
            break;
        default:
            $tipoDia = "Día laboral";
    }
    ?>
    <section>
        <h3>Switch</h3>
        <p>Hoy es el día número <?php echo $diaNumero; ?> — <?php echo $tipoDia; ?></p>
    </section>

    <?php
    // Ejemplo 3: condicional con arreglo
    $usuarios = [
        ["nombre" => "Ana", "edad" => 20],
        ["nombre" => "Luis", "edad" => 15],
    ];
    ?>
    <section>
        <h3>Condicional con arreglo</h3>
        <?php foreach ($usuarios as $u): ?>
            <div class="card">
                <strong><?php echo htmlspecialchars($u['nombre']); ?></strong><br>
                Edad: <?php echo $u['edad']; ?> — 
                <?php
                if ($u['edad'] >= 18) {
                    echo "Mayor de edad";
                } else {
                    echo "Menor de edad";
                }
                ?>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
