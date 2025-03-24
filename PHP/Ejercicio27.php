<?php
$precio= 4;
$num_semana= 2;
$unidades= 9;

switch ($num_semana) {
    case 1:
    case 3:
        $precio = 4;
        break;
    case 2:
    case 4:
        $precio = 6;
        break;
    case 5:
    case 6:
    case 7:
        $precio = 8;
        break;
    default:
        $precio = "error";
    }
echo "<p> Día: ", $num_semana, ", precio: ", $precio, " euros </p>";
?>
