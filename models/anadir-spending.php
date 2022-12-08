<?php
require_once '../config/database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$asigando    = $_POST['asigando'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO proyectos (tarea, categoria, asigando, descripcion) VALUES ('$tarea', '$categoria','$asigando','$descripcion')";
$mysql->query($query);

header("Location: ../app/interfaz.php");