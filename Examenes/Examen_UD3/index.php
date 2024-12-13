<?php
/**
 * Generar una aplicación que genera un examen aleatorio al recargar la página.
 * 
 * @author Luis Pérez
 */

 include("./conf/config.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen Geografía</title>
</head>
<body>
    <h1>Examen de Geografía</h1>
    <form action="" method="POST">
        <?php
            foreach ($aExamenes as $examenes => $examen) {
                foreach ($examen as $contenido) {
                    echo "<h3>" . $contenido['pregunta'] . "</h3>";
                    foreach ($contenido['respuestas'] as $respuesta) {
                        echo "<input type='". $contenido['tipo'] ."' name='respuesta'/>" . $respuesta . "<br/>";
                    }
                }
            }
        ?>
    </form>
</body>
</html>