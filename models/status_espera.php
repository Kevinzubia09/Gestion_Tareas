<?php
require_once '../config/database.php';
$status      = $_POST['status'];
$id          = $_POST['id'];


$query = ("UPDATE proyectos set status=1 where id = '$id'");


header("location: ../app/interfaz.php");