<?php
require_once '../config/database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$id          = $_POST['id'];

$query = " UPDATE proyectos set tarea = '$tarea', categoria = '$categoria', descripcion = '$descripcion' where id = '$id' ";
//echo $query;
$mysql->query($query);

header("location: ../app/interfaz.php");