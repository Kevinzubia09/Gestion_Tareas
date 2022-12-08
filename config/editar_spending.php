<?php
require_once 'database.php';
$tarea       = $_POST['tarea'];
$categoria   = $_POST['categoria'];
$descripcion = $_POST['descripcion'];
$id          = $_POST['id'];

$query = " UPDATE proyectos set tarea = '$tarea', categoria = '$categoria', descripcion = '$descripcion' where id = '$id'";

$mysql->query($query);

header("location: ../app/interfaz.php");