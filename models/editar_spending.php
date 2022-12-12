<?php
require_once '../config/database.php';
$tarea       = $_GET['tarea'];
$categoria   = $_GET['categoria'];
$descripcion = $_GET['descripcion'];
$id          = $_GET['id'];

$query = " UPDATE proyectos set tarea = '$tarea', categoria = '$categoria', descripcion = '$descripcion' where id = '$id' ";

$mysql->query($query);

header("location: ../app/interfaz.php");