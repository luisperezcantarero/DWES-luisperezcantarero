<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>    
<?php
include ('addMascotas_view.php');
?>
<h1>Nuevo Perro:</h1>
<?php
echo "<form action='/add' method='POST'>";
echo "<label for='nombre'>Nombre:</label>";
echo "<input type='text' name='nombre' id='nombre'>";
echo "<label for='raza'>Raza:</label>";
echo "<input type='text' name='raza' id='raza'>";
echo "<label for='peso'>Peso:</label>";
echo "<input type='text' name='peso' id='peso'>";
echo "<input type='submit' value='Añadir'>";
?>
</body>
</html>