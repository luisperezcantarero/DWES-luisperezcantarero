<?php
/**
 * Probando la clase
 * @author Luis Pérez
 */
// Requerimos una vez el contador o nada
require_once "Contador.php";

$nInstancias = Contador::nInstancias();

echo $nInstancias;

// Creamos varios contadores
$contador1 = new Contador();
$contador2 = new Contador(100);
$contador3 = new Contador(10);

// Mostramos el valor de los contadores
echo "<br/>";
echo $contador1;
echo "<br/>";
echo $contador2;
echo "<br/>";


$contador1->contar();
$contador1->contar();

$contador2->contar();
$contador2->contar();

echo $contador1;
echo "<br/>";
echo $contador2;
echo "<br/>";


$nInstancias = Contador::nInstancias();

echo $nInstancias;
?>