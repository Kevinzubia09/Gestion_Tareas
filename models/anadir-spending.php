<?php
require_once '../config/database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$asignado    = $_POST['asignado'];

$query = "INSERT INTO proyectos (tarea, categoria, descripcion, asignado) VALUES ('$tarea', '$categoria','$descripcion', '$asignado')";
//echo $query;
$mysql->query($query);

header("Location: ../app/interfaz.php");