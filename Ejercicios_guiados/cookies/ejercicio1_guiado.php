<?php
/**
 * Crear una cookie de duración limitada
 * 
 * 
 * 
 */
// Crear cookie
setcookie("cookie", "hola mundo", time() +60);

echo "Inicio";
echo "<br/>";

// Mostrar cookie
if (isset($_COOKIE["cookie"])){
    echo $_COOKIE["cookie"];
}
echo "<br/>";
echo "Fin";
?>