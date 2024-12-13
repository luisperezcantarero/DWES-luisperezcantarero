<?php
/**
 * Script con las funciones generales para nuestro proyecto
 * 
 * @author Luis Pérez
 * 
 */

 function clearData($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

?>