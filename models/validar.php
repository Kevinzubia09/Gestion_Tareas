<?php
include_once 'database.php';
$email    = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE correo='$email' AND contraseña='$password'";
$mysql->query($query);
$result = $mysql->query($query);
//echo $query
$row = $result->fetch_assoc();

//print_r ($result);

//$row=mysqli_num_rows($result);

if ($row) {
 session_start();
 $_SESSION['email'] = $email;
 header("location: ../ingresa.php");

} else {
 ?>
<?php
header("location: ./ingresa.php?message=");
 ?>

<?php
}
mysqli_free_result($result);
mysqli_close($conexion);