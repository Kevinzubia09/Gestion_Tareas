<?php
require_once('../../config/config.php');
$email = $_POST['email'];
$password = $_POST['password'];



$query="SELECT *FROM usuarios WHERE correo='$email' AND contraseña='$password'";
$conexion->query($query);
$result = $conexion->query($query);
//echo $query
$row = $result->fetch_assoc();



//print_r ($result);


//$row=mysqli_num_rows($result);

if ($row){
    session_start();
    $_SESSION['email']=$email;
    header("location: ../../index.php");
    
}else{
    ?>
     <?php
      header("location: ../index.php?message=");
     ?>
    
<?php
}
mysqli_free_result($result);
mysqli_close($conexion);