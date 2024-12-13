<?php

function conectaDB()
{
    try {
        $dsn = 'mysql:host=localhost;dbname=mascotas';
        $db = new PDO($dsn, 'luis', 'HTSFXV');

        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');

        return ($db);
    } catch (PDOException $e) {
        echo "Error conexión";
        exit();
    }
}

$db = conectaDB();
$busqueda = $_POST['busqueda'] ?? '';
$busqueda = "%$busqueda%";

$sql = "SELECT * FROM perros WHERE raza LIKE ?";
$consulta = $db->prepare($sql);
$consulta->execute([$busqueda]);
$resultado = $consulta->fetchAll();

echo "Listado de razas que contienen la búsqueda:<br/>";
if (!$resultado) {
    echo "No se encontraron resultados.";
} else {
    foreach ($resultado as $valor) {
        echo "Raza: " . $valor['raza'] . "<br/>";
    }
}
?>
