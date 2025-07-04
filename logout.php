<?php
session_start();
session_destroy(); // DESTRUYE SESION Y REDIRIGE A INDEX.PHP
header("Location: index.php");
exit();
?>