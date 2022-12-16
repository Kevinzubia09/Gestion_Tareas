<?php
include_once '../config/database.php';
$email    = $_POST['email'];
$password = $_POST['password'];
$status   = $_POST['status'];

$query = "SELECT * FROM usuarios WHERE correo='$email' AND contraseña='$password' and rol_id = 0";
$mysql->query($query);
$result = $mysql->query($query);
//echo $query
$row = $result->fetch_assoc();

//print_r ($result);

//$row=mysqli_num_rows($result);

if ($row) {
 session_start();
 $_SESSION['email'] = $email;
 header("location: ../app/interfaz.php");

} else {
 mysqli_free_result($result);
}

mysqli_close($mysql);