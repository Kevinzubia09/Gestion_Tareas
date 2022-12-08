<?php
require_once '../config/database.php';
$id = $_GET['id'];

$query = "DELETE FROM proyectos WHERE id = '$id'";

$mysql->query($query);

header("location: ../app/interfaz.php");