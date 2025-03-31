<?php
$size = 8;
$nFilas = 2;

//Inicialización del tablero (lo rellena de espacios)
for ($row = 0; $row < $size; $row++) {
    for ($col=0; $col<$size; $col++) {
        $tableroPieza[$row][$col] = " ";
    }
}
/*
//Posicionamiento de blancas
$nBlancas=0;
for ($col = 0; $col<$size; $col++){
        if ($col%0=0){
            $var=0;
        } else $var=1;

    for ($row = $var; $row<$size; $row+2){

        do {
            $tableroPieza[$row][$col]="B";
            $nBlancas++;
        } while ($nBlancas<$nFilas);
        $nBlancas=0;
    } 
}
*/



/*
//Posicionamiento de negras
$nNegras=0;
for ($col = 0; $col<$size; $col++){
        if ($col%0=0){
            $var=$size-$nFilas;
        } else {$var=$size-$nFilas-1;}

    for ($row = $var; $row<$size; $row+2){
        
        do {
            $tableroPieza[$row][$col]="N";
            $nNegras++;
        } while ($nNegras<$nFilas);
        $nNegras=0;
    } 
}
*/
function EnTablero($col, $row, $size){
    if ( $tableroPieza[$row][$col] = " "){
        return false;
    }
}
function 



//enemigo abajo: derecha
while ($enemigo=true){
    $fila--; 
    $columna++;
    if (EnTablero()==false){
        return;
    }
    if ($tableroPieza[$row][$col] !=" "){
        return $tableroPieza[$row][$col];
    }
}
//enemigo abajo: izquierda
while (true){
    $fila--; 
    $columna--;
    if (EnTablero()==false){
        return;
    }
    if ($tableroPieza[$row][$col] !=" "){
        return $tableroPieza[$row][$col];
    }
}
//enemigo arriba: izquierda
while (true){
    $fila++; 
    $columna--;
    if (EnTablero()==false){
        return;
    }
    if ($tableroPieza[$row][$col] !=" "){
        return $tableroPieza[$row][$col];
    }
}
//enemigo arriba: derecha
while (true){
    $fila++; 
    $columna++;
    if (EnTablero()==false){
        return;
    }
    if ($tableroPieza[$row][$col] !=" "){
        return $tableroPieza[$row][$col];
    }
}

?>