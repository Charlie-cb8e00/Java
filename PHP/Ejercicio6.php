<?php
$precio= 11.9;
$unidades= 9;

if ($unidades<10){
    echo "El precio total es ", $unidades * $precio, " $";
}
else{
    echo "El precio total es ", $unidades * $precio * 0.95, " $";
}
?>


