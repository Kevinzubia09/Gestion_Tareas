<?php
$HOST     = "localhost";
$USER     = "root";
$PASSWORD = "";
$DB       = "proyecto";

$mysql = new mysqli($HOST, $USER, $PASSWORD, $DB);

if ($mysql->connect_errno) {
 echo "falló la base de datos" . $mysql->connect_error;
}