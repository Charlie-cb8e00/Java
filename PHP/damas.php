<?php
$size = 8;
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



//enemigo abajo: derecha
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