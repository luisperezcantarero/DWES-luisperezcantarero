<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porfolio</title>
    <link rel="stylesheet" href="style/estilos.css">
</head>
<body>
    <style>
        <?php
        $hour_now = Date("H");
        if ($hour_now < 18) {
            echo "body {background-color: #E3F2FD;}";
        } else {
            echo "body {background-color: #2C3E50;}";
        }

        $month = Date("n");
        $day = Date("d");
    
        switch ($month) {
          case 1:
          case 2:
            echo 'header {background-image: url(imgs/invierno.jpeg);}';
            break;
          case 3:
            if ($day >= 21) {
              echo 'header {background-image: url(imgs/primavera.jpeg);}';
            } else {
              echo 'header {background-image: url(imgs/invierno.jpeg);}';
            }
            break;
          case 4:
          case 5:
            echo 'header {background-image: url(imgs/primavera.jpeg);}';
            break;
          case 6:
            if ($day >= 21) {
              echo 'header {background-image: url(imgs/verano.png);}';
            } else {
              echo 'header {background-image: url(imgs/primavera.jpeg);}';
            }
            break;
          case 7:
          case 8:
            echo 'header {background-image: url(imgs/verano.png);}';
            break;
          case 9:
            if ($day >= 21) {
              echo 'header {background-image: url(imgs/otonio.jpg);}';
            } else {
              echo 'header {background-image: url(imgs/verano.png);}';
            }
            break;
          case 10:
          case 11:
            echo 'header {background-image: url(imgs/otonio.jpg);}';
            break;
          case 12:
            if ($day >= 21) {
              echo 'header {background-image: url(imgs/invierno.jpeg);}';
            } else {
              echo 'header {background-image: url(imgs/otonio.jpg);}';
            }
            break;
          default;
            break;
        }
        ?>
    </style>
    <header>
        <h1>Luis Pérez Cantarero</h1>
    </header>
    <main>
        <section>
            <img src="imgs/yo.jpg" alt="yo">
            <ul>
                <li>Edad: 19 años</li>
                <li>Estudios: Bachillerato</li>
                <li>Curso actual: 2º Desarrollo de Aplicaciones Web</li>
                <li>Centro: IES Gran Capitán</li>
            </ul>
        </section>
        <section id="ejercicios">
            <table>
                <thead>
                    <tr>
                        <th>Unidad</th>
                        <th colspan="4">Ejercicios</th>
                    </tr>
                </thead>
                <?php
                include('conf/conf.php');

                foreach($ejercicios as $unidad => $temas) {
                    echo "<tr><td>$unidad</td>";

                    foreach ($temas as $tema => $ejercicio) {
                        echo "<td>$tema:<br/>";

                        foreach ($ejercicio as $archivo) {
                            echo "<a href='Actividades-DWES/$unidad/$tema/$archivo' target='blank'>$archivo</a><br/>";
                        }
                    }
                    echo "</td></tr>";
                }
                ?>
            </table>
        </section>
        <section id="proyectos">
            <h2>Proyectos</h2>
            <ul>
                <?php
                foreach ($proyectos as $proyecto) {
                    echo "<li><a href='proyectos/$proyecto/$proyecto.php'>$proyecto</a></li>";
                }
                ?>
            </ul>
        </section>
    </main>
</body>
</html>