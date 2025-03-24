<?php
$size == 8;
for ($row = 0; $row < $size; $row++) {
    for ($col=0; $col<$size; $col++) {
        $tableroPieza[$row][$col] = " ";
    }
}

for ($col = 0; $col<$size; $col++){
    $tableroPieza[6][$col]="P";
}

function EnTablero($col, $row, $size){
    if ( $tableroPieza[$row][$col] = " "){
        return false;
    }
}



//diagonal arriba derecha
while (true){
    $fila--; 
    $columna++;
    if (EnTablero()==false){
        return;
    }
    if ($tableroPieza[$row][$col] !=" "){
        return $tableroPieza[$row][$col];
    }
}
//diagonal arriba izquierda
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
//diagonal abajo izquierda
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
//diagonal abajo derecha
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



/*
array_push($resultado, [$filaActual, $columnaActual, $ficha]);

Equivalente: 
if ($tablero[$filaActual][$columnaActual] != " ") {
$ficha = $tablero[$filaActual][$columnaActual];
$resultado[]=[$filaActual, $columnaActual, $ficha];
}
*/
?>