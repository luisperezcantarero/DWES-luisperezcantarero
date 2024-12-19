<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include ('list_mascotas_view.php');
    foreach ($data['mascotas'] as $mascota) {
        echo "<tr>
        <td>" . $mascota['nombre'] . "</td>
        <td>" . $mascota['edad'] . "</td>
        <td>" . $mascota['color'] . "</td>
        <td>" . $mascota['raza'] . "</td>
        </tr>";
    }
    ?>

</body>
</html>