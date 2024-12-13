<?php
/**
 * 
 */
// Requerimos clase Persona
require_once "Persona.php";
require_once "Alumno.php";

// Creamos objeto
$persona = new Persona("Luis", "Pérez", "Cantarero");

$persona->saludo();
echo "<br/>" . $persona->nombre();

$alumno1 = new Alumno("Luis", "Pérez", "Cantarero");
echo $alumno1->saludo();
?>