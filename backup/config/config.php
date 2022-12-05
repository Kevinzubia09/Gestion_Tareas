<?php
$HOST     = ("localhost");
$USER     = "root";
$PASSWORD = "";
$DB       = "proyecto";

$conexion = new mysqli($HOST, $USER, $PASSWORD, $DB);

if ($conexion->connect_errno) {
 echo "falló la base de datos" . $conexion->connect_error;
}