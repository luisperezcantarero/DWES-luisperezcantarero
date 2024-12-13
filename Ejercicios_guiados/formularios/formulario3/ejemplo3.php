<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario guiado</title>
</head>
<body>
    <form action="procesa_formulario3.php" method="post">
        <?php
        $datosPersonales = array("nombre", "apellidos", "email");

        foreach ($datosPersonales as $valor) {
            echo "<input type='text' name=" . $valor . '" placeholder=" ' . $valor . '" value=""/>';
        }
        ?>
        <input type="submit" name="enviar" value="Send"/>
    </form>
</body>
</html>