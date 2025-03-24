<?php
$precio= 4;
$num_semana= 2;
$unidades= 9;

if ($num_semana==1 || $num_semana==3){
    echo "El precio total es ", $unidades * $precio, " $";
}
else if ($num_semana==2 || $num_semana==4){
    echo "El precio total es ", $unidades * ($precio + 2), " $";
}
else{
    echo "El precio total es ", $unidades * ($precio + 4), " $";
}
?>


