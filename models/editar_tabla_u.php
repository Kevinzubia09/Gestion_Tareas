<?php
require_once '../config/database.php';
$usuario = $_POST['usuario'];
$rol_id  = $_POST['rol_id'];
$correo  = $_POST['correo'];
$id      = $_POST['id'];

$query = " UPDATE usuarios set usuario = '$usuario', rol_id = '$rol_id', correo = '$correo' where id = '$id' ";
//echo $query;
$mysql->query($query);

header("location: ../app/tabla-usuarios.php");