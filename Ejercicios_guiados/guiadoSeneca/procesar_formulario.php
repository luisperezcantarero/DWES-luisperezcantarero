<?php
/**
 * 
 * 
 */
include("./conf/config.php");

if (!isset($_POST['enviar'])) {
    header("location:test2.php");
}
// Subida fichero csv
$temp = explode(".", $_FILES["csv"]["name"]); // csv es el nombre del input
$extension = end($temp);
if (( $_FILES["csv"]["size"] < MAXSIZE) &&
        in_array($_FILES["csv"]["type"],$allowedFormat) && 
        in_array($extension, $allowedExts)) {
            if ($_FILES["csv"]["error"] > 0) {
                echo "Return Code: " . $_FILES["csv"]["error"] . "<br/>";
            }
            else {
                $filename = $_FILES["csv"]["name"];
                //Codificamos el nombre del fichero en el servidor
                $filename = uniqid().'.'.pathinfo($filename,PATHINFO_EXTENSION);
                if (file_exists(DIRUPLOAD .$filename )) {
                    echo $_FILES["csv"]["name"] . " already exists. ";
                }
                else {
                    move_uploaded_file($_FILES["csv"]["tmp_name"], DIRUPLOAD . $filename);
                }
                echo '<a href="javascript:history.back()">Volver</a>';
            }
        } else {
            echo "Invalid file";
        }
$grupo = $_POST['grupo'];
$curso = $_POST['curso'];
$formato = $_POST['formato'];

echo $grupo . '<br/>';
echo $curso . '<br/>';
echo $formato . '<br/>';

?>