<?php
$precio= 4;
$dia_semana= miercoles;
$unidades= 9;

if ($dia_semana==lunes || $dia_semana==miercoles){
    echo "El precio total es ", $unidades * $precio, " $";
}
else if ($dia_semana==martes || $dia_semana==jueves){
    echo "El precio total es ", $unidades * ($precio + 2), " $";
}
else if ($dia_semana==viernes || $dia_semana==sabado || $dia_semana==domingo){
    echo "El precio total es ", $unidades * ($precio + 4), " $";
}
?>
