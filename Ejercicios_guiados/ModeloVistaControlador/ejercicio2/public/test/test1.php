<?php
require_once "../../app/conf/conf.php";
require_once "../../app/Models/Mascotas.php";

// Creamos mascotas sin utilizar el patrón de diseño
$mascota1 = new Mascotas();
$mascota2 = new Mascotas();
// Hemos creado 2 objetos

// Creamos mascotas utilizando el patron de diseño
$mascota3 = Mascotas::getInstancia();
$mascota4 = Mascotas::getInstancia();
// Se ha creado un solo objeto

$mascota = Mascotas::getInstancia();
$mascota -> setNombre("Anubis");
$mascota -> setPeso(10);
$mascota -> setRaza("Pomeranian");
$mascota ->set();
?>