<?php

require_once 'damas.php';


// Procesar la creación del tablero
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['crear_tablero'])) {
    $tamano = $_POST['tamano'] ?? 8;
    $filas_fichas = $_POST['filas_fichas'] ?? 2;
    
    // Crear el tablero con los valores proporcionados
    $_SESSION['damas'] = new JuegoDamas($tamano, $filas_fichas); 
 
}

// Procesar el movimiento
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['realizar_movimiento'])) {
    $fila = $_POST['fila'];
    $columna = $_POST['columna'];
    $color = $_POST['color'];
    $destinoFila = $_POST['destinoFila'];
    $destinoColumna = $_POST['destinoColumna'];
    
    $damasCreada=$_SESSION['damas'];
    $mensaje = $damasCreada->procesarMovimiento($fila, $columna, $color, $destinoFila, $destinoColumna);
}


    // Mostrar el tablero
     function mostrarTablero($tablero) {
        echo "<table border='1' style='border-collapse: collapse;'>";

        // Mostrar la fila de encabezado (columnas numeradas)
        echo "<tr><td>---</td>"; // Esquina superior izquierda vacía
        for ($col = 0; $col < count($tablero[0]); $col++) {
            echo "<td style='width: 50px; text-align: center;'>" . $col . "</td>";
        }
        echo "</tr>";

        // Mostrar el tablero con filas numeradas
        foreach ($tablero as $i => $fila) {
            echo "<tr>";

            // Número de fila a la izquierda
            echo "<td style='width: 50px; text-align: center;'>" . $i . "</td>";

            // Mostrar las casillas del tablero
            foreach ($fila as $j => $celda) {
                if ($celda == 1) {
                    echo "<td style='width: 50px; height: 50px; background-color: black;'></td>"; // Ficha negra
                } elseif ($celda == 2) {
                    echo "<td style='width: 50px; height: 50px; background-color: white;'></td>"; // Ficha blanca
                } else {
                    echo "<td style='width: 50px; height: 50px; background-color: gray;'></td>"; // Casilla vacía
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

?>

<!-- Formulario para crear el tablero -->
<h3>Crear tablero</h3>
<form method="post">
    <label for="tamano">Tamaño del tablero (8-16):</label>
    <input type="number" name="tamano" value="8" min="8" max="16" required><br><br>

    <label for="filas_fichas">Número de filas de fichas (2-4):</label>
    <input type="number" name="filas_fichas" value="2" min="2" max="4" required><br><br>
    <input type="submit" name="crear_tablero" value="Crear tablero">
</form>

<hr>

<!-- Mostrar el mensaje de resultado si existe -->
<?php if (isset($mensaje)): ?>
    <p><?= $mensaje ?></p>
<?php endif; ?>

<!-- Formulario para realizar el movimiento -->
<?php if (isset($_SESSION['damas'])): ?>

    <h3>Realizar movimiento</h3>
    <form method="post">
        <label for="fila">Fila de la ficha (0-<?= count($_SESSION['damas']->obtenerTablero()) - 1 ?>):</label>
        <input type="number" name="fila" required><br><br>

        <label for="columna">Columna de la ficha (0-<?= count($_SESSION['damas']->obtenerTablero()[0]) - 1 ?>):</label>
        <input type="number" name="columna" required><br><br>

        <label for="color">Color de la ficha (negras o blancas):</label>
        <select name="color" required>
            <option value="negras">Negras</option>
            <option value="blancas">Blancas</option>
        </select><br><br>

        <label for="destinoFila">Fila de destino (0-<?= count($_SESSION['damas']->obtenerTablero()) - 1 ?>):</label>
        <input type="number" name="destinoFila" required><br><br>

        <label for="destinoColumna">Columna de destino (0-<?= count($_SESSION['damas']->obtenerTablero()[0]) - 1 ?>):</label>
        <input type="number" name="destinoColumna" required><br><br>

        <input type="submit" name="realizar_movimiento" value="Realizar movimiento">
    </form>

    <hr>

    <!-- Mostrar el tablero -->
    <h3>Tablero actual</h3>
    <?php 
    if (isset($_SESSION['damas'])){

        mostrarTablero($_SESSION['damas']->obtenerTablero());
    }
     ?>
<?php endif; ?>