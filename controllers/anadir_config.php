<?php
include_once 'database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$descripcion = $_POST['descripcion'];

$query = "INSERT INTO proyectos (tarea, categoria, descripcion) VALUES ('$tarea', '$categoria','$descripcion')";
$mysql->query($query);

header("Location: index.php");