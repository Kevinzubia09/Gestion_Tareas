<?php
require_once '../config/database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO proyectos(tarea, categoria, descripcion) VALUES ('$tarea', '$categoria','$descripcion')";

$mysql->query($query);

header("Location: ../app/interfaz.php");