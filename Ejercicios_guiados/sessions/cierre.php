<?php
session_start();

session_unset();

session_destroy();

header("Location: ejemplo_guiado_sessions.php");
?>