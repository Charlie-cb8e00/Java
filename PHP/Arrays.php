
<?php
$frutas = ["Manzana", "Plátano", "Cereza", "Durian", "Paraguayo"];
foreach ($frutas as $fruta) {
    echo "$fruta ";
  }
?>


<?php
$color = ["rojo", "azul", "verde"];
    echo "$color[1] ";
?>


<?php
$pais = ["USA", "URSS", "Niger"];
$pais[1] = "Mexico";
foreach ($pais as $sitio){
    echo "$sitio ";
}
?>


<?php
$ciudad = ["Ohio", "Málaga", "Mérida"];
array_push($ciudad, "Xiangzhong");
var_dump($ciudad);
?>


<?php
$persona = array(
    "nombre"=>"Ford", "edad"=>"18", "ciudad"=>"Malta");
var_dump($persona);
?>


<?php
$matrix = [[1, 4],[5, 68787867659857658546756756556585875758575], [-1, 6973] ];

echo ($matrix[1][0]);
?>

<?php
//Dado un array bidimensional de 3x2 con nombres de países y capitales,
//recorre el array e imprime cada par país-capital.


?>

<?php
 //Crea un array con 5 números y calcula la suma de todos sus elementos.

?>

<?php
//Crea un array de números y ordénalo de menor a mayor.
 $numero= [1, 4, 5, 6, 7, 89];
sort ($numero);
foreach ($numero as $number){
    echo "number";
}

?>


<?php
$esta1=false;
for ($i=0; $i<count($nombres); $i++){
    $n=nombres[$i];
    if ($n==$aux){
        $esta1=true;
        break;   //opcional
    }
    if ($esta1){
        echo "Está";
    }
    else {
        echo "$n está en el array";
    }
}
?>

<?php
//ajedrez



?>