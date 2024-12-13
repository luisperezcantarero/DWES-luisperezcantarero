<?php
/**
 * 
 * 
 */

 session_start();
 if (!isset($_SESSION['nombre'])) {
    $_SESSION['nombre'] = 'Luis';
    $_SESSION['apellidos'] = 'Pérez';
 }
?>