<?php
$dia= 3;
$entradas= 4;

if ($dia==1 || $dia==3){
    echo "El precio total es ", $entradas * 5, " $";
}
else{
    echo "El precio total es ", $entradas * 7, " $";
}
?>