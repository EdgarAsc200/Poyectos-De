<?php
//llamar al modelo
require_once("modelos/Libros.php");
//Crear la instancia
$libro = new Libros();
$datos = $libro->getLibros();

?>