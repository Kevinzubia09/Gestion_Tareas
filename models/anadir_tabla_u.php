<?php
require_once '../config/database.php';
$usuario = $_POST['usuario'];
$rol_id  = $_POST['rol_id'];
$correo  = $_POST['correo'];

$query = "INSERT INTO usuarios (usuario, rol_id, correo,) VALUES ('$usuario', '$rol_id','$correo', )";
//echo $query;
$mysql->query($query);

header("Location: ../app/tabla-usuarios.php");