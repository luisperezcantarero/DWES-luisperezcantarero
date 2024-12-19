<?php
require_once "../../app/conf/conf.php";
require_once "../../app/Models/Mascotas.php";

use App\Models\Mascotas;

// Creamos mascotas sin utilizar el patrón de diseño
// $mascota1 = new Mascotas();
// $mascota2 = new Mascotas();
// Hemos creado 2 objetos

// Creamos mascotas utilizando el patron de diseño
// $mascota3 = Mascotas::getInstancia();
// $mascota4 = Mascotas::getInstancia();
// Se ha creado un solo objeto

// $mascota = Mascotas::getInstancia();
// $mascota -> setNombre("Anubis");
// $mascota -> setPeso(10);
// $mascota -> setRaza("Pomeranian");
// $mascota ->set();
// $mascota -> get(8);
$mascota = Mascotas::getInstancia();
$mascota->get(9);
$mascota->delete();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>